# Blog Audit Report — Al-Noman Foundation

**Audit Date:** 2026-05-04
**Posts Audited:** 3 (in `/blog/`, English only; AR/FR have no translated blog posts)
**Average Score:** 52/100 — **Needs Work**

> Scoring rubric: Content Quality 30 / SEO 25 / E-E-A-T 15 / Technical 15 / AI Citation 15

## Health Overview

| Metric | Count |
|---|---|
| Posts scoring 90+ (Excellent) | 0 |
| Posts scoring 70–89 (Good) | 0 |
| Posts scoring 50–69 (Needs Work) | 3 |
| Posts scoring <50 (Poor) | 0 |
| Orphan pages within blog cluster | 0 |
| Site-orphan blog posts (no contextual links from non-blog pages) | 3 |
| Cannibalization issues | 1 |
| Stale content (90+ days, dateModified never refreshed since publish) | 1 (5-ways-help-gaza) |
| Posts with 0 external citations | 3 |
| Posts with FAQ schema | 0 |
| Posts with custom OG image | 0 (all use generic `og-image.png`) |

## Per-Post Scores

| Post | Total | Content (30) | SEO (25) | E-E-A-T (15) | Technical (15) | AI Citation (15) |
|---|---|---|---|---|---|---|
| `where-your-dollar-goes.html` | **55/100** | 21 | 16 | 5 | 8 | 5 |
| `5-ways-help-gaza.html` | **54/100** | 22 | 16 | 4 | 8 | 4 |
| `annual-report-2025.html` | **48/100** | 19 | 13 | 4 | 8 | 4 |

## Prioritized Action Queue

### Priority 1 — `annual-report-2025.html` (48/100, lowest)
**Top issue:** An annual report with an Organization-only author and zero links to actual financial evidence (Form 990, ProPublica record, Candid profile, governance page) is a credibility and AI-citation miss.
**Recommended actions:**
1. Add inline links to: ProPublica 2024 990-EZ record, `/transparency.html`, `/governance.html`, Candid profile.
2. Add a TL;DR box at the top with 4–5 hard numbers (wells built, meals, students sponsored, total raised).
3. Add a named author/byline (Mwafaq Abushanab as Founder & Advisor) — currently `Organization`-only.
4. Replace generic `og-image.png` with a 2025 annual-report cover image.
5. Tighten meta description to ≤160 chars (currently 165).
6. Add FAQ schema with 3–4 Q&As pulled from the report sections.

### Priority 2 — `5-ways-help-gaza.html` (54/100)
**Top issue:** No external citations to authoritative crisis data (UN OCHA, WHO, IRC) — weakens E-E-A-T for a humanitarian post and limits AI citation pickup.
**Recommended actions:**
1. Add 2–3 external citations to UN OCHA, WHO, or human rights orgs for the crisis context paragraph.
2. The article claims "100% of your donation toward emergency relief" — your site's standard messaging is "90%+". Reconcile or cite the campaign-specific 100% policy with a link to `/transparency.html` or `/zakat-policy.html`.
3. Update `dateModified` (currently equals `datePublished` 2026-01-20 → 104 days stale).
4. Add corporate-matching link (you have employer-matching content on `ways-to-give.html`) — natural fit for action #3 ("Organize a Community Fundraiser").
5. Add 1–2 statistic capsules ("$25 = 1 week of food" already exists — promote these into a styled callout for AI snippet pickup).

### Priority 3 — `where-your-dollar-goes.html` (55/100)
**Top issue:** The 90% efficiency claim is stated repeatedly but never sourced. Trust signal gap.
**Recommended actions:**
1. Cite source for 90% efficiency: link to your latest 990-EZ on ProPublica, your Candid Silver Seal listing, or a finance summary on `/transparency.html`.
2. Title is short (49 chars, room for 60) — consider "Where Does Your Donation Go? 90% Efficiency Explained | Al-Noman".
3. Add Q&A-formatted headings (e.g., "How does Al-Noman keep overhead under 10%?") for AI citation readiness.
4. Add FAQ schema covering the 3–4 most-asked donor questions.
5. Link out to `/transparency.html`, `/governance.html`, and individual program pages — currently 0 internal links beyond the blog cluster.

## Topic Cannibalization

| Cluster | Competing posts | Recommendation |
|---|---|---|
| "where does my donation go / nonprofit transparency / efficiency" | `where-your-dollar-goes.html` (whole post) ↔ `annual-report-2025.html` ("Financial Transparency: Your Dollars at Work" section) | **Differentiate** — make `where-your-dollar-goes` the evergreen efficiency canonical; trim that section in the annual report and link to it instead. |

## Orphan Page Analysis

**Within the blog cluster:** All 3 posts link to each other via "Related Articles" — internally healthy.

**Site-wide (the bigger problem):** No non-blog page contextually links to any blog post. Only `/blog.html` (the index) does. The posts get zero topical authority from your high-value pages:

| Post | Should be linked from |
|---|---|
| `5-ways-help-gaza.html` | `campaigns/save-gaza.html`, `programs.html`, `ways-to-give.html`, `volunteer.html` |
| `annual-report-2025.html` | `transparency.html`, `governance.html`, `about.html`, footer "Transparency" link group |
| `where-your-dollar-goes.html` | `transparency.html`, `ways-to-give.html`, all 10 campaign landing pages (sidebar near donate button), `zakat-policy.html` |

This is the single highest-leverage fix in the audit. Adding 5–10 contextual internal links from your topic pages will significantly improve crawl priority and donor journey conversion.

## Stale Content

| Post | Last Updated | Days Stale (vs 2026-05-04) | Priority | Refresh effort |
|---|---|---|---|---|
| `5-ways-help-gaza.html` | 2026-01-20 | 104 | **High** — Gaza situation is fluid; stats and campaign progress need refresh | Light (1–2h): update stats, add 2 external citations, refresh `dateModified` |
| `where-your-dollar-goes.html` | 2026-01-05 | 119 | **Medium** — evergreen content but the 90% number must align with current 990 | Light (1–2h): cite source, add FAQ schema |
| `annual-report-2025.html` | 2026-02-15 | 78 | **Low** — by design a yearly snapshot, but missing link to actual report PDF | Moderate (3–4h): add real numbers, byline, OG image, FAQ |

## Cross-Cutting Quick Wins (apply to all 3 in one pass)

These would lift every post by ~6–10 points in one sweep:
1. **Add a named author byline** ("Mwafaq Abushanab, Founder & Advisor") — fixes E-E-A-T on all 3.
2. **Custom OG images per post** instead of one generic `og-image.png`.
3. **Add FAQ schema** to each post (3 Q&As minimum).
4. **One TL;DR / "Key Takeaways" callout box per post** at the top — biggest single boost to AI citation readiness.
5. **Translate to AR/FR** — your AR/FR navs currently omit "Blog" because there are no translated posts. Each translation is effectively a new indexable URL with hreflang.
6. **Add 2–3 external authoritative citations per post** (UN OCHA for Gaza, ProPublica/Candid for transparency, etc.).

## Suggested Next Steps

1. Run `/blog rewrite alnoman-website/blog/annual-report-2025.html` first (lowest score, biggest credibility gap).
2. Run `/blog seo-check` on each after rewriting.
3. Run `/blog schema` on each to generate FAQ schema markup.
4. Add the 5–10 contextual internal links from `transparency.html`, `programs.html`, `ways-to-give.html`, and the campaign pages — this is the highest-ROI single change.
5. Plan AR/FR translations once English versions are at 75+ scores.
