# WordPress Archive Indexing Policy

## 1. Purpose

Define the recommended indexing policy for WordPress archive pages on the CiviCore Resource Library.

This document records an SEO policy recommendation only. It does not change WordPress production indexing settings, staging settings, server configuration, DNS, SheetBot files, monetization settings, or production content.

## 2. Background

The CiviCore Resource Library is a young public resource site. Batch 1 and Batch 2 resources are published, and the main resource posts are intended to be discoverable and indexable.

Google Search Console reported 55 "Discovered - currently not indexed" URLs. Follow-up review showed that example URLs were mostly `/tag/...` pages and one `/author/...` page.

This indicates indexing noise from archive pages, not a confirmed technical issue with the main resource posts.

## 3. URL Type Classification

### A. Resource Posts

Recommendation: Index

Reason:

- These are the main SEO/content assets.
- They contain the actual templates, guides, and useful content.

### B. Pages

Recommendation: Index

Examples:

- Homepage
- About
- Contact
- Disclaimer
- Privacy Policy

Reason:

- These are core site pages.

### C. Category Archives

Recommendation: Keep indexable for now, monitor

Reason:

- Category archives may become useful landing pages as content grows.
- Current categories help organize resource content.
- Revisit if category archives become thin, duplicate, or low-performing.

### D. Tag Archives

Recommendation: Noindex

Reason:

- Tag archives generate many thin/low-value URLs.
- Many tags have only one or very few posts.
- They can create indexing noise for a young site.
- Main resource posts already carry the SEO value.

### E. Author Archives

Recommendation: Noindex

Reason:

- The site is not author-brand driven.
- Author archives are likely low-value and may duplicate post lists.
- Reduces unnecessary exposure of author archive URLs.

### F. Search Result Pages, Admin Pages, Login Pages, and System URLs

Recommendation: Not indexable / blocked / not submitted where applicable

Reason:

- These are not public SEO content assets.

## 4. Recommended Policy

- Keep resource posts indexable.
- Keep core pages indexable.
- Keep category archives indexable for now.
- Noindex tag archives.
- Noindex author archives.
- Keep staging noindex,nofollow.
- Do not click "Validate Fix" in Google Search Console until actual changes are implemented and confirmed.

## 5. Implementation Options for a Future Task

These options are documented for a future approved implementation task. Do not apply them as part of this policy review.

### Option A: SEO Plugin Setting

Use an SEO plugin setting, if an SEO plugin is installed or later approved.

This is usually the simplest option if the plugin provides explicit controls for tag archive and author archive indexing.

### Option B: WordPress Theme or Plugin-Level Meta Robots Logic

Use WordPress theme or plugin-level logic to output the correct meta robots value on tag and author archive templates.

This approach should be tested carefully to confirm it affects only the intended archive types.

### Option C: functions.php or Site-Specific Plugin

Use `functions.php` or a small site-specific plugin to add `noindex` to tag and author archive pages.

A site-specific plugin is preferable if the behavior should survive theme changes.

### Option D: robots.txt as Secondary Guidance

Use `robots.txt` only as secondary crawl guidance, not as the primary indexing control.

Meta robots `noindex` is preferred over `robots.txt` blocking when the goal is to remove or avoid indexing, because Google needs to crawl the page to see the `noindex` directive.

## 6. Validation Checklist for Future Implementation

- Confirm tag archive pages show noindex.
- Confirm author archive page shows noindex.
- Confirm resource posts remain indexable.
- Confirm core pages remain indexable.
- Confirm category archives remain indexable, unless later changed.
- Confirm staging remains noindex,nofollow.
- Confirm sitemap does not create unnecessary low-value URL pressure, where configurable.
- Confirm no production content is changed.
- Confirm no SheetBot files/configuration are modified.

## 7. Risk Notes

- Do not noindex posts.
- Do not noindex core pages.
- Do not noindex production globally.
- Do not rely only on robots.txt for noindex behavior.
- Avoid making broad SEO plugin changes without checking production output.

## 8. Decision

Accepted recommendation for next implementation task:

- Noindex tag archive pages.
- Noindex author archive pages.
- Keep category archives indexable for now.
- Keep resource posts and core pages indexable.

This document records the policy recommendation only. Actual production setting changes require a separate implementation task and validation.
