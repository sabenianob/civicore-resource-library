# Search Indexing Follow-Up - 2026-07-30

## Result

CTRL-053 completed successfully on staging and is `STAGING_VALIDATED`. The updated site-specific plugin is active on staging. Staging remains globally non-indexable. Production deployment and Search Console work require separate explicit approval.

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
- `/var/www/resources-production` was not accessed or changed.
- Production WordPress, server configuration, DNS, SSL, content, and SheetBot were not changed.
- No Search Console validation, recrawl, or Request Indexing action was performed.
- Production deployment and Search Console follow-up each require separate explicit approval.
