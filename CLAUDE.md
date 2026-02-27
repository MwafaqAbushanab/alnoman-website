# Al-Noman Foundation Website

## Overview
- **Live site**: https://www.alnoman.org
- **GitHub repo**: https://github.com/MwafaqAbushanab/alnoman-website
- **Hosting**: GoDaddy shared hosting (Apache)
- **Deploy process**: GitHub Actions auto-deploy via FTP on push to `master` (see `.github/workflows/deploy.yml`)
- **Domain registrar**: GoDaddy (expires August 8, 2027)
- **Type**: Static HTML/CSS/JS — no build step, no framework
- **Backend**: Firebase Realtime Database (stats, goals, campaigns, causes)
- **Analytics**: Google Analytics UA-250622242-1 (dual-tagged with GA4 placeholder `G-XXXXXXXXXX` — uncomment after creating GA4 property)

### Deploy
Auto-deployed via GitHub Actions on push to `master`. Uses `SamKirkland/FTP-Deploy-Action@v4.3.5`.
Requires GitHub Secrets: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`.

## Organization Info
- **Name**: Al-Noman Foundation
- **Type**: Registered 501(c)(3) non-profit
- **Location**: Orlando, FL, USA
- **Founded**: 2021, in memory of Noman Abushanab (lost to COVID-19)
- **Motto**: "Be Giving, Be Living"
- **Phone**: +1 (813) 358-4681
- **Email**: info@alnoman.org
- **Efficiency**: 90%+ of every dollar goes directly to people in need
- **Countries served**: Benin, Palestine, USA

## Core Pillars
1. Clean Water (water wells)
2. Education (student sponsorships)
3. Food (bread, meat, meals)
4. Places of Worship (building/restoring)

## Active Campaigns
| Campaign | Location | Stripe Link |
|----------|----------|-------------|
| Save Gaza | Palestine | `buy.stripe.com/28o9DiaQPf07dWw9AM` |
| Bread a Day | Benin | `buy.stripe.com/9AQg1G8IH8BJf0A4gm` |
| Dabiha | Benin | `buy.stripe.com/bIYg1G1gf2dlf0A14f` |
| Water Wells | Benin | `buy.stripe.com/dR6aHm3on5px6u43cj` |
| Be Mobile | Benin | `buy.stripe.com/5kA9Di0cb9FN3hSdR0` |
| Joy for Kids — Toy Distribution | Benin | General donate link |
| Weekly Treats for Kids | Benin | General donate link |
| Hospital Freedom — Medical Relief | Benin | General donate link |
| Ramadan Iftar Meals ($2/meal) | Benin | General donate link |
| Quran Memorization Sponsorship (Zakat) | Benin | General donate link |

## Donation Plans
- **Student Plan**: $30/month — school bag, food, stationery, shoes, books
- **Family Plan**: $99/month — food, rent, 2 students, parents' utilities, shoes
- **General**: Any amount via Stripe or PayPal

## Payment Gateways
- **Stripe**: Primary (multiple campaign-specific links)
- **PayPal**: `paypal.com/donate/?hosted_button_id=XE8JQ8QJKH4FQ`

## Social Media
- Facebook: https://www.facebook.com/ALNOMANFoundation
- Instagram: https://www.instagram.com/al_noman_foundation/
- LinkedIn: https://www.linkedin.com/company/81360274/

## Multilingual Support
- **Languages**: English (default), Arabic (RTL), French
- **Model**: Subdirectory — `/` (English), `/ar/` (Arabic), `/fr/` (French)
- **Language switcher**: Globe icon dropdown on all pages via `js/lang-switcher.js`
- **SEO**: hreflang `<link>` tags on all pages, sitemap.xml with 30 URLs + xhtml:link annotations
- **Arabic**: `<html lang="ar" dir="rtl">`, Noto Sans Arabic font, full RTL CSS overrides
- **French**: `<html lang="fr">`, same LTR layout as English, Inter + Playfair Display fonts
- **Firebase**: Same config preserved across all languages (campaigns, stats, forms)

## Navigation Structure
Home | About | Programs | Campaigns | Ramadan | Stories | Ways to Give | Contact | [Volunteer] | [Donate]

## File Structure
```
alnoman-website/
├── index.html          # Homepage (hero, stats, 5 campaign cards with Firebase progress bars, impact stories, donation plans)
├── about.html          # About page (mission, Noman memorial, pillars, values, transparency)
├── programs.html       # Programs page (water, education, food, worship, mobility, Gaza)
├── campaigns.html      # Crowdfunding browse page (Firebase-powered, filters, progress bars, donate buttons)
├── start-campaign.html # Submit campaign proposal or suggest a cause (dual-tab form, writes to Firebase)
├── stories.html        # Impact Stories page (5 campaign stories + founder story)
├── ways-to-give.html   # Ways to Give page (plans, one-time, campaigns, PayPal, matching)
├── volunteer.html      # Volunteer signup form (Formspree-powered)
├── contact.html        # Contact page (phone, email, WhatsApp, social, inquiry types)
├── ramadan.html        # Ramadan 2026 seasonal campaign (Zakat, Fidya, Sadaqah, Iftar, countdown timer)
├── admin.html          # Admin dashboard (Firebase Auth — stats, goals, campaign/cause/newsletter management)
├── ar/                 # Arabic RTL translations (10 pages mirroring English)
│   ├── index.html
│   ├── about.html
│   ├── programs.html
│   ├── campaigns.html
│   ├── start-campaign.html
│   ├── stories.html
│   ├── ways-to-give.html
│   ├── volunteer.html
│   ├── ramadan.html
│   └── contact.html
├── fr/                 # French translations (10 pages mirroring English)
│   ├── index.html
│   ├── about.html
│   ├── programs.html
│   ├── campaigns.html
│   ├── start-campaign.html
│   ├── stories.html
│   ├── ways-to-give.html
│   ├── volunteer.html
│   ├── ramadan.html
│   └── contact.html
├── .github/workflows/
│   └── deploy.yml      # GitHub Actions auto-deploy via FTP on push to master
├── .gitignore
├── sitemap.xml         # 30 URLs with hreflang annotations (10 per language)
├── robots.txt          # Crawler directives
├── llms.txt            # AI discoverability (ChatGPT, Claude, Perplexity)
├── CLAUDE.md           # This file
├── css/                # Legacy CSS (NOT used — inline styles now)
│   ├── style.css
│   └── styles.css
├── js/
│   ├── script.js       # Legacy JS (NOT used — inline scripts now)
│   └── lang-switcher.js # Language switcher dropdown (shared across all pages)
└── images/             # Campaign photos (also on GoDaddy)
    ├── logo.png        # Header + footer logo on all pages
    ├── gaza.jpg        # Save Gaza campaign (Pexels)
    ├── bread.jpeg      # Bread a Day campaign
    ├── food.jpg        # Dabiha campaign
    ├── waterwell1.jpeg # Water Wells campaign
    ├── bemobile.jpg    # Be Mobile campaign (Pexels)
    └── Education.png   # Education program
```

## Design System
- **Fonts**: Inter (body) + Playfair Display (headings) via Google Fonts
- **Icons**: Font Awesome 6.5.1
- **Logo**: `images/logo.png` in header and footer on all pages
- **Primary color**: `#7352a2` (purple)
- **Primary dark**: `#5a3d8a`
- **Primary light**: `#f0ebf7`
- **Accent**: `#e0d5f0` (light purple)
- **Text on primary**: white
- **All CSS is inline** in each HTML file (no external stylesheets dependency)
- **Favicon**: Inline SVG data URI (no external file needed)
- **Responsive**: Mobile, tablet, desktop breakpoints at 480px, 768px, 1024px

## Shared Elements (All Pages)
- **Skip-to-content** accessibility link (hidden, keyboard-navigable)
- **Cookie consent banner** — localStorage key `alnoman_cookies_accepted`
- **WhatsApp floating button** — links to `https://wa.me/18133584681`
- **Back-to-top button** — appears on scroll, smooth scroll to top
- **Mobile hamburger menu** — JS toggle for responsive nav
- **IntersectionObserver animations** — fade-in on scroll for content sections
- **ARIA attributes** — `aria-hidden="true"` on decorative icons, semantic `role` attributes

## Firebase Integration
- **Project**: alnoman-foundation
- **Database**: https://alnoman-foundation-default-rtdb.firebaseio.com
- **SDK**: Firebase v9.22.0 compat (loaded via CDN)
- **Auth**: Email/Password — admin login: info@alnoman.org
- **Pages using Firebase**: index.html, admin.html, campaigns.html, start-campaign.html, ramadan.html (+ ar/ and fr/ equivalents)

### Database Nodes
| Node | Purpose | Public Read | Public Write |
|------|---------|-------------|--------------|
| `/stats` | Impact counters (wells, meals, students, countries) | Yes | Admin only |
| `/goals` | Campaign progress (raised/target per campaign) | Yes | Admin only |
| `/campaigns` | Crowdfunding campaigns (foundation + community) | Yes | Create pending only |
| `/causes` | Cause suggestions from visitors | Yes | Create pending only |
| `/newsletter` | Newsletter email subscribers | Admin only | Yes (push) |

### Campaign Schema (`/campaigns/{id}`)
```
title, description, category, location,
submitter_name, submitter_email,
goal_amount, raised_amount,
stripe_link, image_url,
status: "pending" | "approved" | "rejected" | "completed",
is_foundation: true/false,
created_at, approved_at, admin_notes
```
- Foundation campaigns: `foundation-gaza`, `foundation-bread`, `foundation-dabiha`, `foundation-water`, `foundation-mobile`, `foundation-toys`, `foundation-treats`, `foundation-hospital`, `foundation-iftar`, `foundation-quran`
- User campaigns: Firebase push IDs

### Cause Schema (`/causes/{id}`)
```
title, description, category,
submitter_name, submitter_email,
status: "pending" | "approved" | "rejected" | "converted",
created_at, admin_notes
```

### Security Rules
- Anyone can read all nodes
- Only authenticated admin can write to `stats` and `goals`
- Anyone can create new campaigns/causes with `status: "pending"` (validation enforced)
- Only admin can update existing campaigns/causes (approve, reject, edit amounts)
- Spam protection: honeypot fields + localStorage 5-min cooldown on forms

### Fallback Defaults (index.html)
```javascript
const defaultStats = { wells: 20, meals: 5000, students: 200, countries: 5 };
const defaultGoals = {
    gaza_raised: 12450, gaza_target: 50000,
    bread_raised: 3200, bread_target: 10000,
    dabiha_raised: 5800, dabiha_target: 15000,
    water_raised: 8700, water_target: 25000,
    mobile_raised: 2100, mobile_target: 10000
};
```

## Crowdfunding System
1. **Visitor submits** campaign proposal or cause suggestion via `start-campaign.html`
2. **Admin reviews** in `admin.html` → Pending Campaigns / Pending Causes sections
3. **Admin creates Stripe link** in Stripe Dashboard, pastes into approval form
4. **Admin approves** → campaign goes live on `campaigns.html` with donate button
5. **Causes** can be acknowledged, rejected, or converted into campaigns
6. **Campaign images**: Admin can set custom image URL, or category-based gradient placeholder is used

## SEO Setup
- JSON-LD structured data: NGO schema + WebSite schema with DonateAction
- AboutPage schema on about.html, ContactPage schema on contact.html
- Blog schema (BlogPosting) on stories.html
- Open Graph + Twitter Card meta tags on all pages
- sitemap.xml with 30 URLs (10 per language) + hreflang annotations
- robots.txt in place
- Canonical URLs set
- Keywords targeting: nonprofit, charity, clean water, education, Benin, Gaza, 501c3

## AI Discoverability
- `llms.txt` at root — structured summary for AI crawlers
- Contains: mission, campaigns, crowdfunding info, donation links, contact info, efficiency stats

## What's Been Done
- [x] Full site redesign (modern CSS, responsive, purple brand)
- [x] Brand recolor from green/gold to purple (#7352a2)
- [x] Logo added (images/logo.png) replacing text-only header
- [x] Phone number updated to +1 (813) 358-4681
- [x] All team member photos removed (replaced with initial avatars)
- [x] Page title fixed (was "webpage with payment gateway")
- [x] Opening hours section removed
- [x] All typos fixed
- [x] Broken social links cleaned up
- [x] LinkedIn admin URL fixed
- [x] 90%+ efficiency messaging added (impact bar, transparency section, CTA)
- [x] Transparency section with donut chart
- [x] JSON-LD structured data added
- [x] Twitter Card + Open Graph meta tags
- [x] sitemap.xml + robots.txt created
- [x] llms.txt for AI discoverability
- [x] Impact Stories page (stories.html) with 5 campaign stories
- [x] Founder memorial story (Noman Abushanab)
- [x] Blog schema markup on stories page
- [x] Team section completely removed from site (per owner request)
- [x] SVG inline favicon (no external file dependency)
- [x] Cookie consent banner (GDPR compliance, localStorage-based)
- [x] WhatsApp floating contact button
- [x] Back-to-top scroll button
- [x] Skip-to-content accessibility link
- [x] ARIA attributes on decorative elements
- [x] Employer matching gift section on homepage + ways-to-give
- [x] Created about.html, programs.html, ways-to-give.html, contact.html
- [x] Created volunteer.html with Formspree integration
- [x] 9 public pages with 300+ words each (meets Google Ad Grants requirement)
- [x] Firebase Realtime Database integration (stats + campaign progress bars)
- [x] Admin dashboard (admin.html) with Firebase Auth
- [x] Donation progress bars on homepage campaigns (Firebase-powered with fallback defaults)
- [x] Campaign images replaced with authentic photos (gaza.jpg, bemobile.jpg from Pexels)
- [x] Crowdfunding system: campaigns.html + start-campaign.html
- [x] Campaign submission form (title, category, description, location, goal, contact info)
- [x] Cause suggestion form (title, category, description, contact info)
- [x] Admin campaign management (approve/reject pending campaigns with Stripe link)
- [x] Admin cause management (approve/reject/convert causes to campaigns)
- [x] Admin approved campaign editor (update raised amounts, goals, Stripe links)
- [x] Firebase security rules (public read, restricted write, validation)
- [x] 10 foundation campaigns seeded into Firebase (5 original + 5 new: Toys, Treats, Hospital, Iftar, Quran)
- [x] Campaign browse page with category filters (All, Foundation, Community, Water, Education, Food, Emergency, Health, Children)
- [x] Spam protection (honeypot fields + localStorage rate limiting)
- [x] Navigation updated on all pages (includes Campaigns link)
- [x] Sitemap updated with all 9 public pages
- [x] Footer links updated across all pages
- [x] Multilingual support — Arabic (RTL) + French (18 translated pages)
- [x] GitHub Actions auto-deploy via FTP on push to main
- [x] Language switcher (globe dropdown) on all pages
- [x] hreflang tags + sitemap.xml expanded to 30 URLs
- [x] Ramadan 2026 campaign page (EN/AR/FR) with countdown timer, Zakat/Fidya/Sadaqah options, Iftar sponsorship
- [x] Newsletter signup on homepages (Firebase-powered, honeypot + rate limiting spam protection)
- [x] Newsletter subscriber management in admin.html (view, delete, CSV export)
- [x] GA4 dual-tagging prepared across all 30 pages (uncomment `G-XXXXXXXXXX` after creating GA4 property)
- [x] 5 new foundation campaigns: Joy for Kids, Weekly Treats, Hospital Freedom, Ramadan Iftar ($2/meal), Quran Memorization (Zakat)
- [x] Health and Children category filters on campaigns browse page (all 3 languages)
- [x] Homepage expanded to 10 campaign cards (all 3 languages)
- [x] Ramadan Iftar calculator updated to $2/meal (rice, salad, drink, fish)
- [x] Admin seed function for adding new foundation campaigns to Firebase

## Roadmap — Website
- [ ] Add real campaign videos (YouTube/Vimeo embeds) to stories page
- [ ] Replace placeholder impact numbers with real stats (wells, meals, students, countries)
- [x] Migrate Google Analytics from UA (deprecated) to GA4 (dual-tagged, GA4 ID placeholder ready)
- [ ] Submit sitemap to Google Search Console
- [ ] Add Google Search Console verification meta tag
- [ ] Create individual campaign landing pages (better SEO + shareable)
- [ ] Add testimonials from beneficiaries
- [ ] Add annual report / financial transparency PDF
- [x] Multilingual support (Arabic, French for Benin audience)
- [x] Add newsletter signup integration (Firebase-powered on homepages + admin CSV export)
- [x] Set up GitHub Pages or Netlify for auto-deploy (replace manual GoDaddy uploads)
- [x] Add Ramadan 2026 seasonal campaign page (EN/AR/FR with countdown, Zakat calculator, giving options)
- [ ] Create social media share images (OG images) for each campaign

---

## Legal & Compliance Checklist

### CRITICAL — Verify Immediately
- [ ] **IRS Form 990 filings** — Verify all years (2021–2025) are filed. Missing 3 consecutive = automatic 501(c)(3) revocation
- [ ] **Florida Charity Registration (FDACS Ch. 496)** — LEGALLY REQUIRED before soliciting donations in FL. Soliciting without it is a felony. Register at fdacs.gov ($10 fee if under $25K revenue)
- [ ] **Florida Annual Report (Sunbiz)** — Due May 1 each year ($61.25). Failure = administrative dissolution
- [ ] **OFAC Compliance** — Critical for Palestine operations. Screen partners against SDN list. Maintain documentation of fund usage. Consider written compliance policy

### Important — Complete Soon
- [ ] Multi-state charitable solicitation registration (41 states require it for online solicitation). Use Unified Registration Statement (multistatefiling.org) to simplify
- [ ] Florida Sales Tax Exemption (Form DR-5) — saves 6%+ on organizational purchases

---

## Credibility & Ratings — Priority Action Plan

### Tier 1 — Do Immediately (Week 1-2)
| Action | Why | Link |
|--------|-----|------|
| Verify IRS EOS listing | Confirm 501(c)(3) is searchable | apps.irs.gov/app/eos/ |
| Register with TechSoup/Percent | Unlocks Google, Microsoft, Canva, etc. | percent.com |
| Claim GuideStar/Candid profile → Gold Seal | #1 credibility signal for donors & foundations | candid.org |
| Enroll with PayPal Giving Fund | Required for Facebook/Instagram donations | paypal.com/us/paypal-giving-fund |
| Apply for Google for Nonprofits | $10K/mo free Google Ads + Workspace + YouTube | google.com/nonprofits |
| Apply for Canva for Nonprofits | Free Canva Pro for design | canva.com/canva-for-nonprofits |
| Sign up for HARO | Free media mentions | helpareporter.com |

### Tier 2 — Short-Term (Month 1)
| Action | Why | Link |
|--------|-----|------|
| Set up Facebook Giving Tools | Birthday fundraisers = passive income | facebook.com/donate/signup |
| Enable Instagram Donation Stickers | 0% fees, frictionless mobile giving | (via Facebook Giving Tools) |
| Claim GoFundMe Pro nonprofit page | Supporters create campaigns for you | gofundme.com |
| Create GreatNonprofits profile + get 10 reviews | "Top Rated" badge = social proof | greatnonprofits.org |
| Claim Charity Navigator profile | Most-checked rating site | charitynavigator.org |
| Register on Benevity | Corporate matching gifts + Give with Bing | benevity.com |
| Set up Zeffy | 100% free donations + email marketing (unlimited) | zeffy.com |
| Apply for Microsoft for Nonprofits | Free Microsoft 365 for up to 300 users | microsoft.com/nonprofits |
| Apply for YouTube Nonprofit Program | Donate button on videos + nonprofit badge | (via Google for Nonprofits) |

### Tier 3 — Medium-Term (Months 2-3)
| Action | Why | Link |
|--------|-----|------|
| Create LaunchGood profile | Muslim crowdfunding, huge during Ramadan | launchgood.com |
| Apply to GlobalGiving | International donor base + corporate partners | globalgiving.org |
| Use Instrumentl 14-day trial | AI-powered grant matching (identify all grants) | instrumentl.com |
| Submit for BBB Wise Giving Alliance review | BBB seal = trust for older/corporate donors | give.org |
| Contact UCF Nonprofit Management Center | Student partnerships + free technical help | ccie.ucf.edu/public-administration/cpnm/ |
| Apply for Google Ad Grants | $120K/year in free ads (needs 5+ content pages) | (via Google for Nonprofits) |

### Ongoing — Annual Requirements
- [ ] File IRS Form 990/990-N/990-EZ by May 15
- [ ] Renew Florida FDACS charity registration (90 days after fiscal year end)
- [ ] File Florida Sunbiz annual report by May 1 ($61.25)
- [ ] Update GuideStar/Candid profile with new financials + impact
- [ ] Renew multi-state registrations (if applicable)

---

## Grant Opportunities

### Federal & International
- **Grants.gov** — USAID grants for international water, education, food security
- **USAID Ocean Freight Reimbursement** — Free shipping of supplies to developing countries (~50 grants/yr)
- **Denton Program** — Free space on US military cargo planes for humanitarian goods

### Clean Water / WASH
- Conrad N. Hilton Foundation Safe Water Initiative
- Youth4Water Grants Programme 2025-2026 (Africa focus)
- UNICEF WASH grants

### Palestine-Specific
- Grant Assistance for Grassroots Human Security Projects (deadline: Dec 31, 2026)

### Florida-Specific
- United Way Mini Grants (up to $5,000)
- Central Florida Foundation Community Partnerships
- Florida Dept. of State Grant Programs (dosgrants.com)

### Research Tools
- **Foundation Directory Online** — Access free through Orange County Library System
- **Instrumentl** — 14-day free trial, AI grant matching ($179+/mo after)
- **FundsforNGOs.org** — Free listing of international development grants

---

## Digital Presence Strategy

### Priority Platforms (Pick 2-3)
1. **Instagram** — Visual storytelling (campaign photos/videos, Reels)
2. **Facebook** — Fundraising tools (birthday campaigns, Donate button)
3. **YouTube** — Long-form impact videos + donate button on videos
4. **TikTok** (optional) — Short emotional videos for Gen Z/Millennial donors

### Content Pillars
1. Impact stories (before/after, field footage from Benin/Palestine)
2. Educational content (water crisis stats, education gaps)
3. Behind-the-scenes (team on the ground, logistics)
4. Donor/volunteer spotlights and thank-yous
5. Calls to action (campaigns, events, matching gifts)

### Email Marketing
- **Recommended**: Zeffy (100% free, unlimited contacts, unlimited emails)
- Alternatives: HubSpot free tier (2,000 emails/mo), MailerLite (1,000 subscribers)

### PR & Media Targets (Orlando)
| Outlet | Type |
|--------|------|
| Orlando Sentinel | Major newspaper |
| Orlando Weekly | Alt-weekly |
| WKMG News 6 / ClickOrlando | CBS TV |
| WFTV | ABC TV |
| Central Florida Public Media / WMFE 90.7 FM | Public radio |

### Partnerships to Pursue
- **Corporate**: Register with Benevity for matching gifts. Add "Does your employer match?" to donation confirmations
- **University**: UCF Center for Public and Nonprofit Management — student interns, research projects
- **Faith-based**: Islamic Society of Central Florida, local Orlando mosques (Zakat/Sadaqah campaigns)
- **NGO peers**: Islamic Relief USA, Water For People, InterAction network
- **Civic**: Rotary International, Lions Club, Central Florida Foundation

---

## Free Tools & Programs (Value Summary)

| Program | What You Get | Value |
|---------|-------------|-------|
| Google Ad Grants | $10K/mo free Google Search ads | $120K/year |
| Google Workspace (Nonprofits) | Gmail, Drive, Docs, Meet @alnoman.org | ~$2K/year |
| Microsoft 365 (Nonprofits) | Outlook, Teams, Word, Excel (up to 300 users) | ~$4K/year |
| Canva Pro (Nonprofits) | Full design suite for up to 50 team members | ~$1.5K/year |
| Zeffy | Donation platform + email marketing (0% fees) | $0 forever |
| YouTube Nonprofit | Donate button on videos + badge | Priceless |
| Facebook/Instagram Giving | 0% fee donations + birthday fundraisers | Priceless |
| TechSoup | 60-90% off Adobe, Zoom, QuickBooks, etc. | Thousands |
| **Total estimated value** | | **$130K+/year** |

## Notes
- The `images/` folder exists on GoDaddy hosting AND in the GitHub repo
- Deploy is automated via GitHub Actions on push to master (FTP to GoDaddy public_html/)
- GitHub Secrets required: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`
- The old CSS files (`css/style.css`, `css/styles.css`) and `js/script.js` are legacy — the redesigned site uses inline styles/scripts and does NOT depend on them
- Impact numbers (20+ wells, 5000+ meals, 200+ students, 5 countries) are PLACEHOLDERS — update with real figures
- Team members section was completely removed from the site (per owner request, Feb 2025)
- All pages use inline SVG favicon — no favicon.ico file needed
- Cookie consent uses localStorage key `alnoman_cookies_accepted`
- Language preference uses localStorage key `alnoman_lang`
- WhatsApp number: +1 (813) 358-4681 — verify this is correct for WhatsApp Business
- Newsletter signup on EN/AR/FR homepages stores to Firebase `/newsletter` node with `source` tag (homepage-en/ar/fr)
- Newsletter uses same spam protection as other forms: honeypot field + localStorage 5-min cooldown (`alnoman_nl_sent`)
- Admin newsletter section shows all subscribers in a table with delete + CSV export
- GA4 dual-tagging: all 30 HTML pages have `// gtag('config', 'G-XXXXXXXXXX');` commented out — uncomment and replace with real GA4 Measurement ID when ready
- To create GA4 property: Go to analytics.google.com → Admin → Create Property → Set up data stream → Copy Measurement ID (starts with G-)
- Ramadan page has gold accent theming (`--ramadan-gold: #d4a843`) alongside purple brand colors
- Admin dashboard is not linked from public navigation (access directly at /admin.html)
- Arabic pages use Noto Sans Arabic font; French pages use same fonts as English (Inter + Playfair Display)
- All ar/ and fr/ pages reference assets via `../images/` and `../js/` relative paths
