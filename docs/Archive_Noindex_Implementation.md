# Archive Noindex Implementation

## 1. Purpose

Document the implemented WordPress archive noindex behavior for the CiviCore Resource Library.

This document records the production behavior and validation evidence for CTRL-051. It does not change server configuration, DNS, SheetBot files or configuration, WordPress production content, monetization settings, lead capture, premium downloads, or plugin behavior.

## 2. Implementation Summary

- Implementation method: small site-specific WordPress plugin on production.
- Reason: no active trusted SEO plugin was installed.
- Behavior: applies `noindex, follow` only to tag archives and author archives.
- Resource posts remain indexable.
- Core pages remain indexable.
- Category archives remain indexable.
- Production does not output a global noindex directive.
- Staging remains `noindex,nofollow`.

## 3. Plugin Details

- Plugin name: CiviCore Archive Noindex.
- Production plugin file path: `/var/www/resources-production/wp-content/plugins/civicore-archive-noindex/civicore-archive-noindex.php`.
- Plugin active: Yes, based on production validation showing expected archive-only robots output.
- WordPress conditionals used:
  - `is_tag()`
  - `is_author()`
- Expected meta robots output for matching archive pages: `noindex, follow`.

No secrets or credentials are included in this document.

## 4. Validation Results

### Tag Archives

- https://resources.civicoreit.com/tag/barangay-resolution/ returned 200 and output `max-image-preview:large, noindex, follow`.
- https://resources.civicoreit.com/tag/certificate-of-indigency/ returned 200 and output `max-image-preview:large, noindex, follow`.
- https://resources.civicoreit.com/tag/water-service-advisory/ returned 200 and output `max-image-preview:large, noindex, follow`.

### Author Archive

- https://resources.civicoreit.com/author/civicore-resource-library/ returned 200 and output `max-image-preview:large, noindex, follow`.

### Resource Posts

The following representative resource posts returned 200 and did not output noindex:

- https://resources.civicoreit.com/lgu-request-letter-template/
- https://resources.civicoreit.com/barangay-resolution-template/
- https://resources.civicoreit.com/certificate-of-indigency-template/

### Core Pages

The following representative core pages returned 200 and did not output noindex:

- https://resources.civicoreit.com/
- https://resources.civicoreit.com/about/
- https://resources.civicoreit.com/contact/
- https://resources.civicoreit.com/disclaimer/
- https://resources.civicoreit.com/privacy-policy/

### Category Archives

The following representative category archives returned 200 and did not output noindex:

- https://resources.civicoreit.com/category/lgu-letters/
- https://resources.civicoreit.com/category/water-district-resources/
- https://resources.civicoreit.com/category/office-digitalization-guides/

### Related Site Reachability

- Existing https://civicoreit.com/ remains reachable.
- Existing https://sheetbot.civicoreit.com/ remains reachable.

### No-Change Confirmation

- No server configuration changed.
- No DNS changes made.
- No SheetBot files or configuration modified.
- No WordPress production content changed.
- No SheetBot links, lead capture forms, AdSense, or premium downloads activated.

## 5. Rollback Note

If rollback is needed, safely rollback by deactivating the site-specific archive noindex plugin.

After deactivation:

- Recheck tag archive robots output.
- Recheck author archive robots output.
- Confirm resource posts remain indexable.
- Confirm core pages remain indexable.
- Confirm category archives remain indexable.
- Confirm production does not output global noindex.

Do not perform rollback unless separately approved.

## 6. Google Search Console Note

Do not immediately assume Google Search Console will update after this implementation. Google must recrawl the archive URLs before GSC can recognize the live noindex signal.

CTRL-052 will monitor whether the noindex signal is recognized and whether archive indexing noise decreases after recrawl.

The Google Search Console "Validate Fix" action should only be considered after confirming the intended noindex behavior is live and stable.
