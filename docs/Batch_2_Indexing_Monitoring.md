# Batch 2 Indexing Monitoring

## 1. Purpose

Track Google discovery and indexing status for Batch 2 resources after production publication.

This checklist is for monitoring only. Do not change production content, server configuration, DNS, SheetBot files, or monetization settings unless a confirmed issue is found and separately approved.

## 2. Production Publication Summary

- Batch 2 published successfully.
- Production front-end QA passed.
- All 10 URLs returned 200.
- Production remains indexable.
- Sitemap should include the new production URLs.
- Staging remains noindex,nofollow.

## 3. Monitoring Checklist

For each Batch 2 URL, check and record:

- URL loads with 200 status.
- URL appears in the WordPress sitemap.
- URL Inspection in Google Search Console.
- Google-selected canonical, if available.
- Indexing status.
- Last crawl date, if available.
- Any discovered crawl/indexing issue.
- Whether manual indexing request was submitted, if needed.

## 4. Monitoring Table

| Resource Title | Production URL | HTTP Status | Sitemap Status | GSC Inspection Status | Indexed? | Notes | Date Checked |
| --- | --- | --- | --- | --- | --- | --- | --- |
| Barangay Resolution Template | https://resources.civicoreit.com/barangay-resolution-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Certificate of Indigency Template | https://resources.civicoreit.com/certificate-of-indigency-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Project Monitoring Report Template | https://resources.civicoreit.com/project-monitoring-report-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Office Memorandum Template | https://resources.civicoreit.com/office-memorandum-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Transmittal Letter Template | https://resources.civicoreit.com/transmittal-letter-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Water Service Interruption Advisory Template | https://resources.civicoreit.com/water-service-interruption-advisory-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Customer Complaint Form Template | https://resources.civicoreit.com/customer-complaint-form-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Simple Records Inventory Template | https://resources.civicoreit.com/simple-records-inventory-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Meeting Minutes Template | https://resources.civicoreit.com/meeting-minutes-template/ | Pending | Pending | Pending | Pending |  | Pending |
| Basic Website Content Checklist for Small Offices | https://resources.civicoreit.com/basic-website-content-checklist-small-offices/ | Pending | Pending | Pending | Pending |  | Pending |

## 5. Recommended Monitoring Schedule

- Initial check: immediately or within 24 hours after publication.
- Follow-up check: after 3 to 7 days.
- Second follow-up: after 14 days if not indexed.
- Avoid unnecessary repeated URL inspection requests.

## 6. Possible Indexing Notes

- New content may take time to appear in search results.
- Sitemap discovery does not guarantee immediate indexing.
- If a URL is not indexed but has no technical issue, monitor first before changing content.
- Only investigate or fix if there is a clear indexing, crawl, canonical, noindex, redirect, or server issue.

## 7. No-Change Confirmation

- No production content changes made.
- No server configuration changes made.
- No DNS changes made.
- No SheetBot files or configuration modified.
- No monetization features activated.

## 8. Follow-Up Review - July 14, 2026

### Date of Review

July 14, 2026

### Summary Finding

Google Search Console reported 55 URLs under "Discovered - currently not indexed." First detected date shown in GSC: July 1, 2026.

Review of example URLs showed that the affected URLs currently appear to be primarily WordPress tag archive pages and one author archive page, not the main Batch 2 resource post URLs.

Examples reviewed:

- https://resources.civicoreit.com/author/civicore-resource-library/
- https://resources.civicoreit.com/tag/action-items/
- https://resources.civicoreit.com/tag/barangay-certificate/
- https://resources.civicoreit.com/tag/barangay-resolution/
- https://resources.civicoreit.com/tag/certificate-of-indigency/
- https://resources.civicoreit.com/tag/customer-complaint-form/
- https://resources.civicoreit.com/tag/meeting-minutes/
- https://resources.civicoreit.com/tag/project-monitoring-report/
- https://resources.civicoreit.com/tag/water-service-advisory/
- https://resources.civicoreit.com/tag/website-content-checklist/

### Classification

The affected examples are classified as:

- Low-priority archive URLs
- Not a blocking issue for Batch 2
- No immediate production content or server fix required

### Recommended Action

- Do not validate fix yet because no actual fix has been applied and this may be normal Google behavior for low-value archive URLs.
- Continue monitoring main resource post URLs.
- Consider future SEO cleanup by noindexing tag archives and author archives.
- Keep actual resource posts indexable.
- Keep category archives indexable only if they are useful and intentionally maintained.

### Positive SEO Signal

Google Search Console showed a positive early signal for:

- https://resources.civicoreit.com/lgu-request-letter-template/

For June 22, 2026 to June 28, 2026, the page showed:

- 52 impressions
- 0 clicks
- 0% CTR
- Average position 6.7

The previous comparison period showed 0 impressions. This suggests early first-page visibility for at least some queries.

Recommendation: review query-level data before making SEO title, meta, or content changes.

### No-Change Confirmation

- No production content changes made.
- No server configuration changes made.
- No DNS changes made.
- No WordPress indexing settings changed.
- No SheetBot files or configuration modified.
- No monetization features activated.
