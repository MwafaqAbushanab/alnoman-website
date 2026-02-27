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

## Social Media
- Facebook: https://www.facebook.com/ALNOMANFoundation
- Instagram: https://www.instagram.com/al_noman_foundation/
- LinkedIn: https://www.linkedin.com/company/81360274/

## Navigation Structure
Home | About | Programs | Campaigns | Stories | Contact | [Donate]

## File Structure
```
alnoman-website/
├── index.html          # Homepage (hero, campaigns, donation plans, impact stats)
├── about.html          # About page (mission, Noman memorial, pillars, values, transparency)
├── programs.html       # Programs page (water, education, food, worship, mobility, Gaza)
├── stories.html        # Impact Stories page (5 campaign stories + founder story)
├── ways-to-give.html   # Ways to Give page (plans, one-time, campaigns, PayPal, matching)
├── contact.html        # Contact page (phone, email, WhatsApp, social, inquiry types)
├── sitemap.xml         # For Google crawling (all 6 pages listed)
├── robots.txt          # Crawler directives
├── llms.txt            # AI discoverability (ChatGPT, Claude, Perplexity)
├── CLAUDE.md           # This file
├── css/                # Legacy CSS (NOT used — inline styles now)
│   ├── style.css
│   └── styles.css
├── js/
│   └── script.js       # Legacy JS (NOT used — inline scripts now)
└── images/             # On GoDaddy only, NOT in GitHub repo
    └── (campaign photos on server)
```

## Design System
- **Fonts**: Inter (body) + Playfair Display (headings) via Google Fonts
- **Icons**: Font Awesome 6.5.1 (no images needed)
- **Primary color**: `#0d7c5f` (deep green — hope/growth)
- **Accent color**: `#d4a843` (gold — warmth/generosity)
- **Dark color**: `#1a1a2e` (navy — trust/authority)
- **All CSS is inline** in each HTML file (no external stylesheets dependency)
- **No images used** — pure CSS gradients and Font Awesome icons
- **Favicon**: Inline SVG data URI (green circle with "AN" text — no external file needed)
- **Responsive**: Mobile, tablet, desktop breakpoints at 480px, 768px, 1024px

## Shared Elements (All Pages)
- **Skip-to-content** accessibility link (hidden, keyboard-navigable)
- **Cookie consent banner** — localStorage key `alnoman_cookies_accepted`
- **WhatsApp floating button** — links to `https://wa.me/18133584681`
- **Back-to-top button** — appears on scroll, smooth scroll to top
- **Mobile hamburger menu** — CSS-only toggle for responsive nav
- **IntersectionObserver animations** — fade-in on scroll for content sections
- **ARIA attributes** — `aria-hidden="true"` on decorative icons, semantic `role` attributes

## SEO Setup
- JSON-LD structured data: NGO schema + WebSite schema with DonateAction
- AboutPage schema on about.html, ContactPage schema on contact.html
- Blog schema (BlogPosting) on stories.html
- Open Graph + Twitter Card meta tags on all pages
- sitemap.xml with all 6 pages (needs Google Search Console verification)
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
- [x] Team section completely removed from site (per owner request)
- [x] Duplicate Projects section removed from homepage (was duplicating Campaigns)
- [x] All video "coming soon" placeholders removed from stories.html
- [x] Navigation updated: Home | About | Programs | Campaigns | Stories | Contact | Donate
- [x] SVG inline favicon (green circle with "AN" — no external file dependency)
- [x] Cookie consent banner (GDPR compliance, localStorage-based)
- [x] WhatsApp floating contact button
- [x] Back-to-top scroll button
- [x] Skip-to-content accessibility link
- [x] ARIA attributes on decorative elements
- [x] Copyright year updated to 2025
- [x] Employer matching gift section added to homepage
- [x] Created about.html (670 lines, 3767 words — mission, Noman memorial, pillars, values, transparency)
- [x] Created programs.html (584 lines, 3575 words — all programs with campaign-specific Stripe links)
- [x] Created ways-to-give.html (690 lines, 3706 words — plans, campaigns, PayPal, employer matching)
- [x] Created contact.html (520 lines, 2625 words — phone, email, WhatsApp, social, inquiry types)
- [x] 6 pages with 300+ words each (meets Google Ad Grants requirement of 5+ pages)
- [x] Sitemap updated with all 6 pages
- [x] llms.txt updated with full site structure
- [x] Footer links updated across all pages to include new pages

## Roadmap — Website
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
- [ ] Add newsletter signup integration (Zeffy — 100% free, unlimited)
- [x] ~~Create a favicon that isn't image-dependent (SVG)~~ — Done: inline SVG data URI
- [x] ~~Add WhatsApp contact button~~ — Done: floating button on all pages
- [ ] Set up GitHub Pages or Netlify for auto-deploy (replace manual GoDaddy uploads)
- [x] ~~Add a "Ways to Give" page~~ — Done: ways-to-give.html
- [ ] Add Ramadan/Eid seasonal campaign pages
- [ ] Create social media share images (OG images) for each campaign
- [x] ~~Add cookie consent banner (GDPR compliance)~~ — Done: localStorage-based on all pages
- [x] ~~Add 5+ pages with 300+ words each (Google Ad Grants)~~ — Done: 6 pages, all 300+ words
- [x] ~~Add employer matching gift prompt~~ — Done: on homepage + ways-to-give page

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
- The `images/` folder exists on GoDaddy hosting but is NOT in the GitHub repo
- When uploading to GoDaddy, upload all 6 HTML files + sitemap.xml + robots.txt + llms.txt to `public_html/`
- The old CSS files (`css/style.css`, `css/styles.css`) and `js/script.js` are legacy — the redesigned site uses inline styles/scripts and does NOT depend on them
- Impact numbers (20+ wells, 5000+ meals, 200+ students, 5 countries) are PLACEHOLDERS — update with real figures
- Team members section was completely removed from the site (per owner request, Feb 2025)
- All pages use inline SVG favicon — no favicon.ico file needed
- Cookie consent uses localStorage key `alnoman_cookies_accepted`
- WhatsApp number: +1 (813) 358-4681 — verify this is correct for WhatsApp Business
