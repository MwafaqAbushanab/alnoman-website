# Al-Noman Foundation Website

## Overview
- **Live site**: https://www.alnoman.org
- **GitHub repo**: https://github.com/MwafaqAbushanab/alnoman-website
- **Hosting**: GoDaddy shared hosting (Apache), NOT auto-deployed from GitHub
- **Deploy process**: Manually upload files to GoDaddy cPanel > File Manager > `public_html/`
- **Domain registrar**: GoDaddy (expires August 8, 2027)
- **Type**: Static HTML/CSS/JS — no build step, no framework
- **Analytics**: Google Analytics UA-250622242-1 (legacy Universal Analytics)

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

## Donation Plans
- **Student Plan**: $30/month — school bag, food, stationery, shoes, books
- **Family Plan**: $99/month — food, rent, 2 students, parents' utilities, shoes
- **General**: Any amount via Stripe or PayPal

## Payment Gateways
- **Stripe**: Primary (multiple campaign-specific links)
- **PayPal**: `paypal.com/donate/?hosted_button_id=XE8JQ8QJKH4FQ`

## Team Members
Alain Gnimavo, Hatem Alkurd, Kamel Djerarda, Marwan Abushanab, Rehina Holovatar, Mwafaq Abushanab

## Social Media
- Facebook: https://www.facebook.com/ALNOMANFoundation
- Instagram: https://www.instagram.com/al_noman_foundation/
- LinkedIn: https://www.linkedin.com/company/81360274/

## File Structure
```
alnoman-website/
├── index.html          # Main site (single page, all CSS inline)
├── stories.html        # Impact Stories / blog page
├── sitemap.xml         # For Google crawling
├── robots.txt          # Crawler directives
├── llms.txt            # AI discoverability (ChatGPT, Claude, Perplexity)
├── CLAUDE.md           # This file
├── css/                # Legacy CSS (NOT used by redesign — inline styles now)
│   ├── style.css
│   └── styles.css
├── js/
│   └── script.js       # Legacy JS (NOT used — inline scripts now)
└── images/             # On GoDaddy only, NOT in GitHub repo
    ├── favicon.ico
    └── (campaign/team photos on server)
```

## Design System
- **Fonts**: Inter (body) + Playfair Display (headings) via Google Fonts
- **Icons**: Font Awesome 6.5.1 (no images needed)
- **Primary color**: `#0d7c5f` (deep green — hope/growth)
- **Accent color**: `#d4a843` (gold — warmth/generosity)
- **Dark color**: `#1a1a2e` (navy — trust/authority)
- **All CSS is inline** in each HTML file (no external stylesheets dependency)
- **No images used** — pure CSS gradients, icons, and initials for team avatars
- **Responsive**: Mobile, tablet, desktop breakpoints at 480px, 768px, 1024px

## SEO Setup
- JSON-LD structured data: NGO schema + WebSite schema with DonateAction
- Open Graph + Twitter Card meta tags on all pages
- Blog schema (BlogPosting) on stories.html
- sitemap.xml submitted (needs Google Search Console verification)
- robots.txt in place
- Canonical URLs set
- Keywords targeting: nonprofit, charity, clean water, education, Benin, Gaza, 501c3

## AI Discoverability
- `llms.txt` at root — structured summary for AI crawlers
- Contains: mission, campaigns, donation links, contact info, efficiency stats

## What's Been Done
- [x] Full site redesign (no images, modern CSS, responsive)
- [x] Phone number updated to +1 (813) 358-4681
- [x] All team member photos removed (replaced with initial avatars)
- [x] Page title fixed (was "webpage with payment gateway")
- [x] Opening hours section removed
- [x] All typos fixed (benefitors, stationary, parents utlities, acess, etc.)
- [x] Broken social links cleaned up (only real links shown)
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
- [x] Stories link in main nav + footer

## Roadmap
- [ ] Add real campaign videos (YouTube/Vimeo embeds) to stories page
- [ ] Add real campaign photos to story cards and campaign sections
- [ ] Replace placeholder impact numbers with real stats (wells, meals, students, countries)
- [ ] Migrate Google Analytics from UA (deprecated) to GA4
- [ ] Submit sitemap to Google Search Console
- [ ] Add Google Search Console verification meta tag
- [ ] Create individual campaign landing pages (better SEO + shareable)
- [ ] Add donation progress bars to campaigns (social proof)
- [ ] Add testimonials from beneficiaries
- [ ] Add annual report / financial transparency PDF
- [ ] Multilingual support (Arabic, French for Benin audience)
- [ ] Add newsletter signup integration (Mailchimp or similar)
- [ ] Create a favicon that isn't image-dependent (SVG)
- [ ] Add WhatsApp contact button (popular for international donors)
- [ ] Set up GitHub Pages or Netlify for auto-deploy (replace manual GoDaddy uploads)
- [ ] Add a "Ways to Give" page (Stripe, PayPal, Zelle, bank transfer, stock donations)
- [ ] Add Ramadan/Eid seasonal campaign pages
- [ ] Create social media share images (OG images) for each campaign
- [ ] Add cookie consent banner (GDPR compliance for international donors)

## Notes
- The `images/` folder exists on GoDaddy hosting but is NOT in the GitHub repo
- When uploading to GoDaddy, upload all files to `public_html/`
- The old CSS files (`css/style.css`, `css/styles.css`) and `js/script.js` are legacy — the redesigned site uses inline styles/scripts and does NOT depend on them
- Impact numbers (20+ wells, 5000+ meals, 200+ students, 5 countries) are PLACEHOLDERS — update with real figures
