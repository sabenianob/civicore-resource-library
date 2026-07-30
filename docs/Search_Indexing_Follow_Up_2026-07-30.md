# Search Indexing Follow-Up - 2026-07-30

## Result

CTRL-053 completed successfully on staging and is `STAGING_VALIDATED`. CTRL-054 completed successfully in production and is `PRODUCTION_VALIDATED`. Plugin v2.0.0 is active on both sites; staging remains globally non-indexable and production remains indexable. Search Console work requires separate explicit approval.

## Repository Review

- Starting branch: `main`.
- Starting commit: `b0c75a4` (`Document archive noindex implementation`).
- Starting status: clean and synchronized with `origin/main`.
- Remote: `https://github.com/sabenianob/civicore-resource-library.git`.
- `AGENTS.md`: not present.
- Prepared commit `5cd6d5e`: not present locally or in remote branch history.
- Equivalent plugin source and sitemap changes: not present before this run.
- Added source: `/wordpress/plugins/civicore-archive-noindex/civicore-archive-noindex.php`.

## Safety Preflight

- Target host: `ccit-serv1`.
- Verified public IP: `159.65.2.194`.
- WordPress root: `/var/www/resources-staging`.
- Staging URL: `https://resources-staging.civicoreit.com/`.
- No active SSH/login sessions were reported by `who`.
- No process was reported as using the staging plugin directory.
- PHP CLI: `8.3.6`.
- WordPress: `7.0.2`.
- WordPress loaded successfully and the database check passed.
- System WP-CLI was unavailable. WP-CLI `2.12.0` was used temporarily from `/tmp` for validation without changing server configuration.
- Global indexing option before deployment: `blog_public=0`.
- Existing staging plugin file: absent.
- Existing activation state: inactive because the plugin was absent.
- Previous version and checksum: not applicable.

## Backup And Deployment

- Rollback record: `/var/backups/civicore/ctrl-053-20260730T034701Z`.
- The rollback manifest records the original absent/inactive state and removal-based rollback procedure.
- Reviewed source: `/wordpress/plugins/civicore-archive-noindex/civicore-archive-noindex.php`.
- Destination: `/var/www/resources-staging/wp-content/plugins/civicore-archive-noindex/civicore-archive-noindex.php`.
- Candidate native `php -l`: passed.
- Deployed native `php -l`: passed.
- Deployed plugin version: `2.0.0`.
- Deployed SHA-256: `f356e1ebb0c441470f9ab4369b89100042a8956f13b760173ddd2a9639d03082`.
- Deployed owner/group: `www-data:www-data`.
- Deployed file mode: `644`.
- Plugin activation: active.

## Sitemap Validation

Persistent staging mode:

- `blog_public=0`.
- Sitemaps internally disabled.
- Registered provider: `homepage`.
- Homepage provider URL: `https://resources-staging.civicoreit.com/`.
- Taxonomy provider: absent.
- User provider: absent.
- Public `https://resources-staging.civicoreit.com/wp-sitemap.xml`: `404`, expected while staging discourages search engines.

Process-local enabled-mode simulation, with no option or database change:

- Providers: `posts,homepage`.
- Homepage provider: present.
- Taxonomy provider: absent.
- User provider: absent.
- Persisted `blog_public` after simulation: `0`.

## Robots And Feed Validation

- `/category/lgu-letters/`: `200`, robots `noindex, follow`.
- `/tag/barangay/`: `200`, robots `noindex, follow`.
- `/author/resouser/`: `200`, robots `noindex, follow`.
- `/category/lgu-letters/feed/`: `200`, `X-Robots-Tag: noindex, follow`.
- `/tag/barangay/feed/`: `200`, `X-Robots-Tag: noindex, follow`.
- `/author/resouser/feed/`: `200`, `X-Robots-Tag: noindex, follow`.

## Canonical And Health Validation

- Homepage: `200`, canonical `https://resources-staging.civicoreit.com/`, robots `noindex, nofollow`.
- Contact page: `200`, canonical `https://resources-staging.civicoreit.com/contact/`, robots `noindex, nofollow`.
- Representative resource post: `200`, canonical `https://resources-staging.civicoreit.com/lgu-request-letter-template/`, robots `noindex, nofollow`.
- WP-CLI loaded WordPress without PHP warnings or fatal errors.
- WordPress database tables passed `wp db check`.
- Staging Nginx error log was empty.
- WordPress debug log was absent.
- PHP-FPM journal contained no warning-or-higher entries after deployment.
- Historical PHP-FPM capacity warnings predated the deployment and were unrelated.

## Boundaries And Next Step

- Staging remained globally non-indexable throughout validation.
- Basic Auth and any existing staging access controls were not changed.
- CTRL-053 did not access or change `/var/www/resources-production`.
- No Search Console validation, recrawl, or Request Indexing action was performed during staging validation.

## Production Deployment - CTRL-054

### Result And Time

- Status: `PRODUCTION_VALIDATED`.
- Deployment completed: `2026-07-30T03:57:03Z` UTC.
- Asia/Manila time: `2026-07-30T11:57:03+0800`.
- Target host: `ccit-prod-1` at `159.89.206.141`.
- WordPress root: `/var/www/resources-production`.
- Exact change: replaced only the CiviCore Archive Noindex plugin file and retained its active state.
- Rollback status: not invoked; all acceptance criteria passed.

### Production Safety Preflight

- Starting repository branch and commit: clean `main` at `1ceeb17`, synchronized with `origin/main`.
- Staging-validation commit `1ceeb17` and its evidence were present.
- Server identity and production WordPress root matched the approved target.
- No active SSH/login sessions were reported by `who`.
- No process was reported as using the production plugin directory.
- Available disk space: approximately `64G`, with the root filesystem at `5%` use.
- PHP CLI: `8.3.6`.
- WordPress: `7.0`.
- Database connection: healthy.
- Production indexing before deployment: `blog_public=1`.
- Existing plugin: active version `1.0.0`.
- Existing plugin SHA-256: `af8b69f39659352bb91d62c7e3505d29eefc9690ad7ef95bb54a93a3ce541f98`.
- Existing directory/file ownership: `www-data:www-data`; modes `755` and `644`.
- Baseline Resource Library, corporate-site, and SheetBot health checks returned `200`.
- Baseline log review found older WordPress core REST batch warnings at approximately `2026-07-30 07:10 +0800`; they predated deployment and did not recur during validation.

### Backup And Deployment

- Backup path: `/var/backups/civicore/ctrl-054-20260730T035557Z`.
- Backup permissions: root-owned directory with mode `700`.
- Backup contents: complete previous `civicore-archive-noindex` plugin directory plus a manifest recording version, checksum, active state, ownership, and modes.
- Repository candidate version: `2.0.0`.
- Repository candidate SHA-256: `f356e1ebb0c441470f9ab4369b89100042a8956f13b760173ddd2a9639d03082`.
- Staging-deployed SHA-256: `f356e1ebb0c441470f9ab4369b89100042a8956f13b760173ddd2a9639d03082`.
- Secure temporary production candidate SHA-256: `f356e1ebb0c441470f9ab4369b89100042a8956f13b760173ddd2a9639d03082`.
- Deployed production SHA-256: `f356e1ebb0c441470f9ab4369b89100042a8956f13b760173ddd2a9639d03082`.
- Candidate native `php -l`: passed.
- Deployed native `php -l`: passed.
- Deployment method: atomic single-file replacement.
- Deployed owner/group: `www-data:www-data`.
- Deployed directory/file modes: `755` and `644`.
- No activation toggle, rewrite flush, service restart, or configuration change was needed.

### Internal Production Validation

- Temporary WP-CLI `2.12.0` loaded WordPress without PHP warnings or fatal errors.
- WordPress core verified successfully against official checksums.
- Database tables passed `wp db check`.
- Plugin status: active, version `2.0.0`.
- Production indexing: `blog_public=1`.
- Sitemaps enabled internally: yes.
- Registered providers: `posts,homepage`.
- Taxonomy provider: absent.
- User provider: absent.
- Homepage provider URL: `https://resources.civicoreit.com/`.
- Homepage sitemap URL: `https://resources.civicoreit.com/wp-sitemap-homepage-1.xml`.
- Standard sitemap rewrite rules remained present; no flush was required.

### Public Production Validation

- Homepage, Contact, and three representative resource articles returned `200` with zero redirects.
- `wp-sitemap.xml` returned `200` and advertised only post, page, and homepage sitemap groups.
- `wp-sitemap-homepage-1.xml` returned `200` and contained the production homepage.
- Legacy taxonomy and user sitemap paths were no longer advertised and contained no XML sitemap entries; WordPress returned its normal HTML fallback at those paths.
- The homepage is also present in the core page sitemap. This duplicate sitemap reference is non-blocking and reflects the staging-approved v2.0.0 implementation.
- Category `/category/lgu-letters/` returned `200` with `noindex, follow`.
- Tag `/tag/barangay/` returned `200` with `noindex, follow`.
- Author `/author/civicore-resource-library/` returned `200` with `noindex, follow`.
- Corresponding category, tag, and author feeds returned `200` with `X-Robots-Tag: noindex, follow`.
- Homepage, Contact, `basic-website-content-checklist-small-offices`, `meeting-minutes-template`, and `simple-records-inventory-template` used self-referencing canonicals.
- Those indexable URLs emitted `max-image-preview:large` and did not emit `noindex`.
- `robots.txt` allowed public crawling outside WordPress administration paths and advertised `https://resources.civicoreit.com/wp-sitemap.xml`.
- No redirect loops, unexpected canonicals, `5xx` responses, or rendered PHP warnings were observed.

### Regression And Logs

- `https://civicoreit.com/` returned `200` with no redirect.
- `https://sheetbot.civicoreit.com/` returned `200` with no redirect.
- No login or application workflow was performed on either service.
- Resource Library Nginx error log did not change after deployment; only the pre-existing REST batch warnings remained.
- PHP-FPM journal contained no warning-or-higher entries after deployment.
- WordPress debug log was absent.
- Production content, WordPress core, themes, unrelated plugins, DNS, SSL, Nginx, PHP-FPM, database settings, credentials, CiviCore corporate-site files, and SheetBot files were untouched.

### Search Console Follow-Up

Search Console was not opened or changed during CTRL-054. After separate approval, the recommended manual sequence is:

1. Submit or recheck `https://resources.civicoreit.com/wp-sitemap.xml` in the Sitemaps report.
2. Run URL Inspection live tests for the homepage and representative resource articles.
3. Run URL Inspection on representative category, tag, and author archives to confirm Google sees `noindex`.
4. Request indexing only for the homepage and intended resource articles, not archive pages.
5. Monitor sitemap processing, indexing status, canonical selection, and archive exclusions after Google recrawls.
