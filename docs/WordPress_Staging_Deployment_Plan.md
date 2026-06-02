# WordPress Staging Deployment Plan

## 1. Purpose

Plan the staging deployment for the CiviCore Resource and Template Library before installing WordPress or changing server configuration.

This document is planning-only. It records the proposed deployment approach, requirements, checklist items, and readiness concerns before any server work begins.

No WordPress installation, DNS update, SSL setup, database creation, or server configuration change has been performed as part of this document.

## 2. Confirmed Decisions

- Platform: WordPress for v1
- Production URL: https://resources.civicoreit.com
- Production Server IP: 159.89.206.141
- Proposed staging URL: https://resources-staging.civicoreit.com
- Staging Server IP: 159.65.2.194
- Hosting: DigitalOcean
- Domain: civicoreit.com

## 3. Proposed Environment Structure

### Local Development, if Needed

Local development may be used for theme planning, content formatting tests, plugin evaluation, or layout experiments before changes are pushed to staging.

Local development is optional for the initial content-first version. It should be used only if it helps reduce risk before staging work.

### Staging Environment

The staging environment should be used to install, configure, and test WordPress before production launch.

Staging should be used for:

- WordPress installation testing
- Theme and layout configuration
- Plugin evaluation
- Draft import testing
- SEO metadata review
- Sitemap and robots.txt review
- SSL verification
- Backup testing
- Security checks
- User acceptance review before production

Staging should not be indexed by search engines.

### Production Environment

The production environment will host the public resource library at:

```text
https://resources.civicoreit.com
```

Production should be configured only after staging is reviewed and approved.

## 4. DNS Requirements

Required DNS records:

- resources-staging.civicoreit.com
- resources.civicoreit.com

Use placeholder IP values during planning:

```text
A record: resources-staging -> SERVER_IP
A record: resources -> SERVER_IP
```

Planning notes:

- The staging record should point to the staging server when DNS setup is approved.
- The production record should point to the production server when production deployment is approved.
- DNS changes should not be made until the deployment task is approved.
- DNS propagation should be considered during launch planning.

## 5. Server Requirements

The staging and production environments should meet the basic requirements for a WordPress deployment.

Recommended server requirements:

- Ubuntu server
- Nginx or Apache
- PHP compatible with WordPress
- MySQL or MariaDB
- SSL via Let's Encrypt
- Firewall enabled
- Regular backups

Additional planning notes:

- Keep server packages updated.
- Use secure SSH access.
- Limit administrative access.
- Document all database names, users, site paths, and backup routines in a secure internal location.
- Do not commit credentials, private keys, API keys, or database passwords to the repository.

## 6. WordPress Installation Checklist

Planning only. Do not execute yet.

Checklist:

- [ ] Create site directory.
- [ ] Create database and database user.
- [ ] Configure web server virtual host/server block.
- [ ] Install WordPress.
- [ ] Configure wp-config.php.
- [ ] Enable SSL.
- [ ] Complete WordPress setup wizard.
- [ ] Create admin account.
- [ ] Disable indexing on staging.
- [ ] Install minimum required plugins only.

Staging setup reminders:

- Use a strong administrator password.
- Keep staging admin accounts limited.
- Confirm staging is blocked from indexing.
- Confirm file permissions are appropriate.
- Confirm backups before testing migrations or major configuration changes.

## 7. Recommended Initial Plugins

Keep the plugin list conservative.

Suggested plugin categories:

- SEO plugin
- Security plugin
- Backup plugin
- Caching/performance plugin
- Forms plugin, if needed later

Do not overload the site with plugins.

Plugin selection rules:

- Install only plugins needed for the current phase.
- Prefer reputable, actively maintained plugins.
- Avoid overlapping plugins with duplicate functionality.
- Review plugin impact on performance and security.
- Remove unused plugins.

## 8. Staging Security Rules

Staging security rules:

- Use a strong admin password.
- Limit admin accounts.
- Disable search engine indexing on staging.
- Keep plugins minimal.
- Do not expose API keys.
- Do not commit credentials or server secrets.
- Do not enable public lead capture yet.
- Confirm backups before production migration.
- Keep staging content marked as draft or test where appropriate.
- Review user roles before production migration.

## 9. Content Migration Plan

The first 10 markdown drafts may later be converted into WordPress posts or pages.

Proposed migration flow:

1. Review each markdown draft using /docs/Content_Review_Checklist.md.
2. Confirm category, tags, slug, meta title, and meta description.
3. Copy the draft content into a WordPress draft post or page.
4. Format headings, tables, lists, and template blocks for WordPress.
5. Add disclaimers in visible positions.
6. Add related resource links when matching pages exist.
7. Preview on desktop and mobile.
8. Confirm SEO metadata in the selected SEO plugin.
9. Keep the content in draft status until final review.
10. Schedule or publish only after approval.

Migration notes:

- Legal-adjacent templates require extra review before publication.
- Cost, budget, procurement, technical, cybersecurity, privacy, and compliance-related resources should keep clear disclaimer language.
- Markdown files should remain in the repository as source drafts unless a later workflow replaces them.
- WordPress content should not expose private planning notes or internal server details.

## 10. Production Readiness Checklist

Before production launch, confirm:

- [ ] SSL working.
- [ ] DNS confirmed.
- [ ] SEO settings reviewed.
- [ ] Sitemap ready.
- [ ] robots.txt reviewed.
- [ ] Privacy policy prepared if forms are added.
- [ ] No test content exposed.
- [ ] Initial resources reviewed.
- [ ] Backup confirmed.
- [ ] Staging indexing disabled before any public testing.
- [ ] Production indexing behavior intentionally configured.
- [ ] Admin accounts reviewed.
- [ ] Plugins reviewed and minimized.
- [ ] Contact details and public-facing information verified.
- [ ] Legal-adjacent resources reviewed before publication.
