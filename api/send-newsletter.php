<?php
/**
 * Al-Noman Foundation - Newsletter Sender
 * Sends emails via Brevo (Sendinblue) API
 * Requires Firebase Auth ID token for admin verification
 */

// CORS
$allowed_origins = ['https://www.alnoman.org', 'https://alnoman.org'];
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: $origin");
}
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json');

// Handle preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// Only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// ============================================
// CONFIGURATION
// ============================================
require_once __DIR__ . '/config.php'; // Contains BREVO_API_KEY (not in git)
define('SENDER_EMAIL', 'info@alnoman.org');
define('SENDER_NAME', 'Al-Noman Foundation');
define('ADMIN_EMAIL', 'info@alnoman.org');
define('DAILY_LIMIT', 300);
define('RATE_LIMIT_FILE', __DIR__ . '/.rate_limit');
define('FIREBASE_PROJECT_ID', 'alnoman-foundation');

// ============================================
// RATE LIMITING (file-based, 300/day)
// ============================================
function checkRateLimit() {
    $today = date('Y-m-d');
    $data = ['date' => $today, 'count' => 0];

    if (file_exists(RATE_LIMIT_FILE)) {
        $content = file_get_contents(RATE_LIMIT_FILE);
        $stored = json_decode($content, true);
        if ($stored && isset($stored['date']) && $stored['date'] === $today) {
            $data = $stored;
        }
    }

    return $data;
}

function incrementRateLimit($sentCount) {
    $today = date('Y-m-d');
    $data = checkRateLimit();
    $data['date'] = $today;
    $data['count'] = $data['count'] + $sentCount;
    file_put_contents(RATE_LIMIT_FILE, json_encode($data));
}

function getRemainingEmails() {
    $data = checkRateLimit();
    return max(0, DAILY_LIMIT - $data['count']);
}

// ============================================
// FIREBASE TOKEN VERIFICATION
// ============================================
function verifyFirebaseToken($idToken) {
    // Verify the Firebase ID token using Google's public keys
    $url = 'https://identitytoolkit.googleapis.com/v1/accounts:lookup?key=AIzaSyAp0xPPTcMk9C3ZsGBOyajBb-t_WKu3BFo';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['idToken' => $idToken]));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        return false;
    }

    $result = json_decode($response, true);
    if (!$result || !isset($result['users']) || empty($result['users'])) {
        return false;
    }

    $user = $result['users'][0];
    $email = $user['email'] ?? '';

    // Only allow admin email
    if (strtolower($email) !== strtolower(ADMIN_EMAIL)) {
        return false;
    }

    return $email;
}

// ============================================
// SEND EMAIL VIA BREVO API
// ============================================
function sendEmailViaBrevо($to_email, $to_name, $subject, $html_content) {
    $url = 'https://api.brevo.com/v3/smtp/email';

    $payload = [
        'sender' => [
            'name' => SENDER_NAME,
            'email' => SENDER_EMAIL
        ],
        'to' => [
            [
                'email' => $to_email,
                'name' => $to_name ?: $to_email
            ]
        ],
        'subject' => $subject,
        'htmlContent' => $html_content,
        'headers' => [
            'List-Unsubscribe' => '<mailto:info@alnoman.org?subject=Unsubscribe>',
            'X-Mailin-Tag' => 'newsletter'
        ],
        'replyTo' => [
            'email' => SENDER_EMAIL,
            'name' => SENDER_NAME
        ]
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'api-key: ' . BREVO_API_KEY,
        'Accept: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        return ['success' => false, 'error' => 'cURL error: ' . $error];
    }

    if ($httpCode >= 200 && $httpCode < 300) {
        return ['success' => true];
    }

    $result = json_decode($response, true);
    return ['success' => false, 'error' => $result['message'] ?? "HTTP $httpCode"];
}

// ============================================
// MAIN HANDLER
// ============================================
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON body']);
    exit;
}

// Verify auth token
$token = $input['token'] ?? '';
if (!$token) {
    http_response_code(401);
    echo json_encode(['error' => 'Authentication required']);
    exit;
}

$adminEmail = verifyFirebaseToken($token);
if (!$adminEmail) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized. Admin access only.']);
    exit;
}

// Get parameters
$subject = trim($input['subject'] ?? '');
$bodyHtml = $input['body_html'] ?? '';
$recipients = $input['recipients'] ?? [];

if (!$subject) {
    http_response_code(400);
    echo json_encode(['error' => 'Subject is required']);
    exit;
}

if (!$bodyHtml) {
    http_response_code(400);
    echo json_encode(['error' => 'Email body is required']);
    exit;
}

if (empty($recipients) || !is_array($recipients)) {
    http_response_code(400);
    echo json_encode(['error' => 'At least one recipient is required']);
    exit;
}

// Check rate limit
$remaining = getRemainingEmails();
$recipientCount = count($recipients);

if ($recipientCount > $remaining) {
    http_response_code(429);
    echo json_encode([
        'error' => "Daily limit would be exceeded. $remaining emails remaining today. Trying to send $recipientCount.",
        'remaining' => $remaining
    ]);
    exit;
}

// Send emails
$successCount = 0;
$failCount = 0;
$errors = [];

foreach ($recipients as $recipient) {
    $email = $recipient['email'] ?? '';
    $name = $recipient['name'] ?? '';

    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $failCount++;
        $errors[] = "Invalid email: $email";
        continue;
    }

    $result = sendEmailViaBrevо($email, $name, $subject, $bodyHtml);

    if ($result['success']) {
        $successCount++;
    } else {
        $failCount++;
        $errors[] = "$email: " . ($result['error'] ?? 'Unknown error');
    }

    // Small delay to avoid hitting API rate limits
    if ($recipientCount > 10) {
        usleep(100000); // 100ms between emails
    }
}

// Update rate limit
incrementRateLimit($successCount);

// Return results
echo json_encode([
    'success' => true,
    'sent' => $successCount,
    'failed' => $failCount,
    'total' => $recipientCount,
    'remaining_today' => getRemainingEmails(),
    'errors' => array_slice($errors, 0, 10) // Max 10 error messages
]);
