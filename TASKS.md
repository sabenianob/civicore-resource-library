# TASKS.md: CiviCore Resource and Template Library

This file is the single source of truth for project tasks under the AIOS workflow.

## Project

CiviCore Resource and Template Library

## Project Boundary

This is separate from SheetBot. Do not modify SheetBot files, deployment, database, or production configuration.

## Deployment Direction

Production deployment target:

- Server name: ccit-prod-1
- Server IP: 159.89.206.141
- Existing live sites:
  - https://civicoreit.com/
  - https://sheetbot.civicoreit.com/

Staging server remains:

- Server name: ccit-serv1
- Server IP: 159.65.2.194
- Staging URL: https://resources-staging.civicoreit.com

Important correction:

- Production DNS for resources.civicoreit.com should point to 159.89.206.141, not 159.65.2.194.
- Do not change production DNS until production launch is approved.

---

## Task Status Legend

- BACKLOG
- READY
- IN_PROGRESS
- TESTING
- DONE
- BLOCKED

---

## READY

### CTRL-034: Post-Launch SEO Setup

Status: READY

Owner: User / Codex

Priority: Medium

Context:

The CiviCore Resource Library is now publicly indexable. The next step is post-launch SEO setup and monitoring.

Scope:

Prepare SEO basics only. Do not activate monetization or lead capture yet.

Checklist:

- Confirm sitemap availability.
- Configure SEO plugin if selected.
- Confirm page titles and meta descriptions.
- Confirm robots.txt.
- Add property to Google Search Console.
- Submit sitemap to Search Console.
- Monitor indexing status.
- Keep staging noindex,nofollow.
- Do not submit staging sitemap.

---

## TESTING

---

### CTRL-015: Prepare WordPress Staging Installation Commands

Status: TESTING

Owner: ChatGPT / Codex

Priority: High

Context:

Prepare a reviewed command plan for installing WordPress staging later at https://resources-staging.civicoreit.com.

Scope:

- Create /docs/WordPress_Staging_Installation_Commands.md.
- Group commands into careful manual execution phases.
- Record confirmed stack details.
- Include safety checks, web root creation, database creation, WordPress download, wp-config.php setup, Nginx server block, DNS, SSL, setup wizard, validation, and rollback notes.
- Do not execute commands.
- Do not install WordPress.
- Do not change server configuration.
- Do not add application logic.
- Do not modify SheetBot files or config.

Acceptance criteria:

- WordPress_Staging_Installation_Commands.md exists under /docs.
- Commands are clearly marked for manual execution only after review.
- Existing civicore and sheetbot configs are explicitly protected.
- No commands are executed as part of this documentation task.

Implementation notes:

- WordPress staging installation command plan created.
- Commands prepared but not executed.
- No WordPress installation performed.
- No server configuration changed.
- No SheetBot files or config modified.

---

## BACKLOG

No backlog tasks currently listed.

---

## DONE

### CTRL-033: Enable Production Indexing and Public Launch

Status: DONE

Owner: User

Priority: High

Completion notes:

Live confirmation:

- WordPress blog_public option confirmed as 1.
- Rendered homepage source confirmed no longer includes noindex,nofollow.
- Rendered homepage source shows only the indexable robots meta value max-image-preview:large.
- Production robots.txt confirmed available and includes https://resources.civicoreit.com/wp-sitemap.xml.
- Staging rendered source confirmed still includes noindex,nofollow.

- Production indexing enabled for https://resources.civicoreit.com.
- WordPress setting “Discourage search engines from indexing this site” was unchecked.
- Rendered source confirmed no longer includes noindex,nofollow.
- Homepage loads.
- Required pages load:
  - /about/
  - /contact/
  - /disclaimer/
  - /privacy-policy/
- First 10 resource posts load.
- Existing https://civicoreit.com/ remains reachable.
- Existing https://sheetbot.civicoreit.com/ remains reachable.
- Staging site remains noindex,nofollow.
- No SheetBot links activated.
- No lead capture forms activated.
- No AdSense activated.
- No premium downloads activated.
- No SheetBot files or configuration modified.

---

### CTRL-031: Perform Production Front-End QA

Status: DONE

Owner: User / ChatGPT

Priority: High

Context:

Production WordPress is installed and approved content has been imported and published at https://resources.civicoreit.com. Production remains noindex/nofollow. A final front-end QA pass is required before public indexing is enabled.

Scope:

Review the production front-end only. Do not remove noindex/nofollow yet. Do not activate monetization or lead capture.

QA checklist:

- Homepage loads correctly.
- Homepage is set as static front page.
- Main navigation works:
  - Home
  - About
  - Resources
  - Disclaimer
  - Contact
- Required pages load:
  - /about/
  - /contact/
  - /disclaimer/
  - /privacy-policy/
- First 10 resource post URLs load:
  - /lgu-request-letter-template/
  - /barangay-project-proposal-template/
  - /permit-to-enter-private-property-template/
  - /right-of-way-agreement-template/
  - /water-system-project-proposal-template/
  - /street-lighting-project-proposal-template/
  - /water-district-website-modernization-checklist/
  - /office-digitalization-starter-guide/
  - /google-workspace-folder-structure-small-offices/
  - /basic-project-cost-estimate-template/
- Category archive pages load.
- Tag archive pages load.
- Resource formatting is clean.
- Internal draft metadata is not visible.
- Duplicate body-level titles are not visible.
- Disclaimers display clearly where needed.
- Legal-adjacent templates remain cautious.
- Cost estimate template includes budgeting/procurement caution.
- Comments are not visible on resource posts.
- Navigation and footer are clean.
- Mobile view works without horizontal overflow.
- Production noindex/nofollow remains enabled during QA.
- No SheetBot links are active.
- No lead capture forms are active.
- No AdSense is active.
- No premium downloads are active.
- Existing https://civicoreit.com/ remains working.
- Existing https://sheetbot.civicoreit.com/ remains working.
- No production server config changes are needed.

Acceptance Criteria:

- Production front-end QA completed.
- Any issues are listed.
- If no blocking issues are found, project may proceed to launch indexing approval.
- Production remains noindex/nofollow until explicit approval.
- No SheetBot files or configuration modified.

Implementation notes:

- CTRL-032 cleanup was created to resolve production QA findings related to public-facing launch copy and placeholder contact details.
- Follow-up production QA completed after CTRL-032 cleanup.
- Duplicate body-level headings removed from Homepage and Contact.
- Production page source confirmed noindex/nofollow remains enabled.
- Homepage and Contact each render with a single visible H1 from the WordPress theme/page title.
- Existing CiviCore and SheetBot sites remain reachable.
- Nginx config test passes.
- No SheetBot files or configuration modified.

---

### CTRL-032: Clean Up Production Launch Copy

Status: DONE

Owner: User / Codex

Priority: High

Context:

Production front-end QA found that the site was functional but not yet launch-ready because some public-facing copy still contained planning/scaffold language and placeholder contact details.

Scope:

Clean up production WordPress Homepage and Contact page copy only. Do not remove production noindex/nofollow. Do not activate SheetBot links, lead capture forms, AdSense, or premium downloads. Do not change production DNS. Do not modify SheetBot files or configuration.

Completion notes:

- Homepage planning/scaffold language removed.
- Homepage rewritten with public-facing CiviCore Resource Library copy.
- Future SheetBot placeholder text removed.
- Duplicate body-level Homepage heading removed.
- Contact page placeholder details removed.
- Contact page updated with inquiries@civicoreit.com.
- Contact page updated with official website https://civicoreit.com/.
- Duplicate body-level Contact heading removed.
- Resources menu/anchor checked.
- Production page source confirmed noindex/nofollow remains enabled.
- Production noindex/nofollow remains enabled.
- No SheetBot links activated.
- No lead capture forms activated.
- No AdSense activated.
- No premium downloads activated.
- No production DNS changes made.
- Existing CiviCore and SheetBot sites remain reachable.
- No SheetBot files or configuration modified.

---

### CTRL-030: Import Staging Content to Production WordPress

Status: DONE

Owner: User / Codex

Priority: High

Context:

Production WordPress is installed and accessible at https://resources.civicoreit.com. The next step is to migrate the approved staging content into the production WordPress site while keeping production noindex/nofollow enabled until final launch approval.

Scope:

Import approved content from staging WordPress to production WordPress. Do not remove noindex/nofollow. Do not activate SheetBot links, lead capture, AdSense, or premium downloads.

Recommended migration method:

- Use WordPress export/import from staging to production.
- Fallback to manual copy if formatting issues occur.

Content to migrate:

Required pages:

- Homepage
- About CiviCore Resources
- Contact
- Disclaimer
- Privacy Policy

First 10 resource posts:

- LGU Request Letter Template
- Barangay Project Proposal Template
- Permit to Enter Private Property Template
- Right-of-Way Agreement Template
- Water System Project Proposal Template
- Street Lighting Project Proposal Template
- Water District Website Modernization Checklist
- Office Digitalization Starter Guide
- Google Workspace Folder Structure for Small Offices
- Basic Project Cost Estimate Template

Production configuration checklist:

- Keep production noindex/nofollow enabled.
- Confirm permalink structure remains /%postname%/.
- Confirm timezone remains Asia/Manila.
- Create or verify categories.
- Create or verify tags.
- Import required pages.
- Import first 10 posts.
- Set Homepage as static front page.
- Configure navigation:
  - Home
  - About
  - Resources
  - Disclaimer
  - Contact
- Confirm footer/demo links are removed or replaced.
- Confirm comments are disabled on resource posts.
- Confirm no SheetBot links are active.
- Confirm no lead capture forms are active.
- Confirm no AdSense is active.
- Confirm no premium downloads are active.

Acceptance Criteria:

- Required pages exist on production.
- First 10 resource posts exist on production.
- Homepage is set as static front page.
- Slugs match staging-approved URLs.
- Categories and tags are present.
- Navigation and footer are clean.
- Production noindex/nofollow remains enabled.
- No SheetBot links, lead capture, AdSense, or premium downloads activated.
- Existing https://civicoreit.com/ remains working.
- Existing https://sheetbot.civicoreit.com/ remains working.
- No SheetBot files or configuration modified.

Completion notes:

- Production content import completed.
- Required pages imported and published.
- First 10 resource posts imported and published on production.
- Homepage set as static front page.
- Categories and tags are present.
- Navigation imported: Home, About, Resources, Disclaimer, Contact.
- Footer template part imported from staging.
- Comments disabled on resource posts.
- Production noindex/nofollow remains enabled.
- Permalinks remain /%postname%/.
- Timezone remains Asia/Manila.
- No active SheetBot links, lead capture, AdSense, or premium downloads activated.
- https://resources.civicoreit.com returns 200.
- Required pages return 200.
- First 10 resource post URLs return 200.
- Sample category/tag URLs return 200.
- Existing https://civicoreit.com/ remains working.
- Existing https://sheetbot.civicoreit.com/ remains working.
- Nginx config test passes.
- No SheetBot files or configuration modified.

---

### CTRL-029: Execute Production WordPress Installation

Status: DONE

Owner: User

Priority: High

Context:

Production backup and DNS readiness have been confirmed. The next step is to execute the reviewed production WordPress installation commands on ccit-prod-1 for resources.civicoreit.com.

Scope:

Install an isolated production WordPress site on ccit-prod-1 using the prepared production structure. Do not modify existing CiviCore or SheetBot configurations except by adding a separate resources-production Nginx server block.

Execution plan:

- Use /docs/Production_WordPress_Installation_Commands.md.
- Create separate web root:
  - /var/www/resources-production
- Create separate database:
  - resources_production_wp
- Create separate database user:
  - resources_prod_wp_user
- Create separate Nginx config:
  - /etc/nginx/sites-available/resources-production
- Use production domain:
  - resources.civicoreit.com
- DNS target:
  - resources.civicoreit.com -> 159.89.206.141
- Issue SSL only after DNS resolves.
- Keep production noindex until final validation is complete.
- Validate existing live sites after installation:
  - https://civicoreit.com/
  - https://sheetbot.civicoreit.com/

Acceptance Criteria:

- Production WordPress installed in isolated web root.
- Production database and user created separately.
- Production Nginx server block created separately.
- resources.civicoreit.com loads over HTTPS.
- WordPress dashboard is accessible.
- Production remains noindex until final approval.
- Existing CiviCore official site remains accessible.
- Existing SheetBot beta remains accessible.
- No SheetBot files or configuration modified.

Completion notes:

- Production WordPress installed at https://resources.civicoreit.com.
- Isolated web root used: /var/www/resources-production.
- Separate database created: resources_production_wp.
- Separate database user created: resources_prod_wp_user.
- Separate Nginx config created: /etc/nginx/sites-available/resources-production.
- Production Nginx enabled symlink created:
  - /etc/nginx/sites-enabled/resources-production
- Production DNS resolved to the production server:
  - resources.civicoreit.com -> 159.89.206.141
- SSL issued and active.
- WordPress login page accessible.
- Production noindex/nofollow remains enabled.
- Timezone set to Asia/Manila.
- Permalink structure set to /%postname%/.
- https://resources.civicoreit.com returns 200.
- https://resources.civicoreit.com/wp-login.php returns 200.
- https://civicoreit.com/ returns 200.
- https://sheetbot.civicoreit.com/ returns 200.
- Nginx config test passes.
- Production credentials generated on the server and stored outside GitHub:
  - /root/resources-production.credentials
- No credentials committed to GitHub.
- Existing CiviCore official site confirmed reachable:
  - https://civicoreit.com/
- Existing SheetBot beta confirmed reachable:
  - https://sheetbot.civicoreit.com/
- No existing CiviCore Nginx config intentionally modified.
- No existing SheetBot Nginx config intentionally modified.
- No SheetBot files or configuration modified.

---

### CTRL-028: Confirm Production Backup and DNS Readiness

Status: DONE

Owner: User

Priority: High

Context:

Before executing production installation commands on ccit-prod-1, backup readiness and DNS control must be confirmed. The production server hosts both the official CiviCore website and SheetBot beta, so no production work should proceed without a recovery point.

Scope:

Confirm readiness only. Do not install WordPress. Do not change DNS. Do not modify server configuration.

Checklist:

- DigitalOcean snapshot of ccit-prod-1 is created or a recent backup is confirmed.
- Existing CiviCore website remains reachable:
  - https://civicoreit.com/
- Existing SheetBot beta remains reachable:
  - https://sheetbot.civicoreit.com/
- DNS control for civicoreit.com is confirmed.
- Production DNS record is not yet changed.
- Strong production database password is generated and stored securely outside GitHub.
- WordPress production admin username and password plan is prepared.
- Staging site remains available:
  - https://resources-staging.civicoreit.com
- Staging content export method is confirmed:
  - WordPress export/import, or
  - manual content copy if export/import causes formatting issues.
- Production install commands have been reviewed.
- Rollback notes have been reviewed.

Acceptance Criteria:

- Snapshot or backup confirmed before production work.
- DNS control confirmed.
- Credentials prepared but not committed.
- No production DNS changes made yet.
- No production installation performed yet.
- No server configuration changed yet.
- No SheetBot files or configuration modified.

Completion notes:

- DigitalOcean snapshot or recent backup for ccit-prod-1 confirmed.
- Existing CiviCore website confirmed reachable:
  - https://civicoreit.com/
- Existing SheetBot beta confirmed reachable:
  - https://sheetbot.civicoreit.com/
- DNS control for civicoreit.com confirmed.
- Production DNS for resources.civicoreit.com has not yet been changed.
- Strong production database password generated and stored securely outside GitHub.
- Production WordPress admin credential plan prepared.
- Staging site remains available:
  - https://resources-staging.civicoreit.com
- Content migration approach confirmed:
  - WordPress export/import first
  - manual copy fallback if needed
- Rollback notes reviewed.
- No production DNS changes made.
- No production installation performed.
- No production server configuration changed.
- No SheetBot files or configuration modified.

---

### CTRL-027: Prepare Production WordPress Installation Commands

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Prepare reviewed commands for installing the CiviCore Resource Library production WordPress site at https://resources.civicoreit.com.

Scope:

- Create /docs/Production_WordPress_Installation_Commands.md.
- Document conservative manual execution phases.
- Use separate production web root, database, database user, and Nginx server block.
- Document the production DNS requirement.
- Document SSL, WordPress setup/import, validation, and rollback commands.
- Do not change production DNS.
- Do not install WordPress on production.
- Do not modify production server configuration.
- Do not modify SheetBot files or configuration.

Acceptance criteria:

- Production WordPress installation command plan exists under /docs.
- Commands are prepared for later manual execution only.
- Existing CiviCore and SheetBot configs are explicitly protected.
- Separate production web root, database, database user, and Nginx config are documented.
- Production DNS target is documented as resources.civicoreit.com -> 159.89.206.141.
- No production DNS changes are made.
- No production WordPress installation is performed.
- No server configuration is changed.
- No SheetBot files or configuration are modified.

Implementation notes:

- Production WordPress installation command plan created.
- Separate production structure documented:
  - Web root: /var/www/resources-production
  - Database: resources_production_wp
  - Database user: resources_prod_wp_user
  - Nginx config: /etc/nginx/sites-available/resources-production
  - Domain: resources.civicoreit.com
- Production DNS target documented:
  - resources.civicoreit.com -> 159.89.206.141
- Database password was not committed.
- Placeholder <SECURE_PRODUCTION_DB_PASSWORD> used.
- No production DNS changes made.
- No production WordPress installation performed.
- No production server configuration changed.
- No SheetBot files or configuration modified.

---

### CTRL-026: Prepare Production Deployment Plan

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Prepare a safe production deployment plan for launching the CiviCore Resource Library at https://resources.civicoreit.com.

Scope:

- Create /docs/Production_Deployment_Plan.md.
- Document the confirmed production deployment target.
- Document the production DNS target.
- Recommend a separate production WordPress install.
- Define production safety principles, backup checks, installation planning, migration, SEO, security, validation, and launch hold conditions.
- Do not change production DNS.
- Do not install WordPress on production.
- Do not modify production server configuration.
- Do not modify SheetBot files or configuration.

Acceptance criteria:

- Production deployment plan exists under /docs.
- Production target is confirmed as ccit-prod-1 at 159.89.206.141.
- Existing live sites are documented.
- Separate production WordPress install is recommended.
- No production DNS changes are made.
- No production WordPress installation is performed.
- No server configuration is changed.
- No SheetBot files or configuration are modified.

Implementation notes:

- Production deployment plan created.
- Production target confirmed as ccit-prod-1 at 159.89.206.141.
- Separate production WordPress install selected.
- Existing live sites documented.
- No production DNS changes made.
- No production WordPress installation performed.
- No server configuration changed.
- No SheetBot files or configuration modified.

---

### CTRL-025: Verify Production Server for Resource Library Deployment

Status: DONE

Owner: Codex

Priority: High

Context:

The CiviCore Resource Library will be deployed to the production server ccit-prod-1 at 159.89.206.141. This server already hosts the official CiviCore IT Solutions website and the SheetBot beta. Before preparing production installation or migration commands, the server stack and existing site configuration must be verified.

Scope:

Gather production server facts only. Do not modify configuration. Do not install WordPress. Do not change DNS.

Verification checklist:

- Confirm hostname.
- Confirm server IP addresses.
- Confirm whether server uses Nginx or Apache.
- Confirm services listening on ports 80 and 443.
- Confirm PHP version.
- Confirm PHP-FPM status if using Nginx.
- Confirm MySQL or MariaDB availability.
- Confirm current hosted sites.
- Confirm available disk space.
- Confirm firewall status.
- Confirm Certbot availability.
- Confirm Nginx/Apache available site configs.
- Confirm existing production web roots.
- Confirm current server names for civicoreit.com and sheetbot.civicoreit.com.
- Confirm backup or snapshot availability before changes.

Suggested read-only commands:

```bash
hostname
hostname -I
lsb_release -a
sudo ss -tulpn | grep -E ':80|:443'
nginx -v 2>/dev/null || true
apache2 -v 2>/dev/null || true
php -v
systemctl list-units --type=service | grep php || true
ls /run/php 2>/dev/null || true
ls /etc/php 2>/dev/null || true
mysql --version
df -h
sudo ufw status
certbot --version 2>/dev/null || true
ls /etc/nginx/sites-available 2>/dev/null || true
ls /etc/nginx/sites-enabled 2>/dev/null || true
ls /etc/apache2/sites-available 2>/dev/null || true
sudo nginx -T 2>/dev/null | grep -E "server_name|root|fastcgi_pass" | head -n 120
```

Acceptance criteria:

- Production server stack is identified.
- Existing live site configs are identified.
- No configuration files are modified.
- No WordPress production installation is performed.
- No DNS changes are made.
- No SheetBot files or configuration are modified.
- Findings are recorded before any production deployment planning.

Implementation notes:

- Production server verified as ccit-prod-1.
- Public IP confirmed as 159.89.206.141.
- Private IPs reported: 10.15.0.7 and 10.104.0.5.
- Ubuntu 24.04.4 LTS confirmed.
- Nginx confirmed on ports 80 and 443.
- Apache not found.
- PHP 8.3.6 confirmed.
- php8.3-fpm.service confirmed active and running.
- PHP-FPM sockets found:
  - /run/php/php8.3-fpm.sock
  - /run/php/php8.3-fpm-sheetbot.sock
  - /run/php/php-fpm.sock
- MariaDB/MySQL client confirmed available.
- UFW confirmed active with OpenSSH and Nginx Full allowed.
- Certbot 2.9.0 confirmed available.
- Existing live sites confirmed reachable:
  - https://civicoreit.com/
  - https://sheetbot.civicoreit.com/
- Existing production Nginx configs identified:
  - /etc/nginx/sites-available/civicoreit.com
  - /etc/nginx/sites-available/sheetbot
  - /etc/nginx/sites-available/default
- Existing production web roots identified:
  - /var/www/civicoreit.com/public
  - /var/www/sheetbot/public
- SheetBot uses a dedicated PHP-FPM socket:
  - /run/php/php8.3-fpm-sheetbot.sock
- Server-local backup paths observed:
  - /var/www/backups
  - /root/sheetbot-backups
  - /var/backups
- DigitalOcean snapshot availability was not confirmed from the server shell and should be confirmed in the DigitalOcean control panel before changes.
- Findings recorded in /docs/Production_Server_Verification_Report.md.
- No configuration files were modified.
- No WordPress production installation was performed.
- No DNS changes were made.
- No SheetBot files or configuration were modified.

---

### CTRL-024: Clean Up WordPress Staging Presentation

Status: DONE

Owner: User / Codex

Priority: High

Context:

WordPress staging front-end QA passed functionally, but presentation cleanup was needed before production-readiness planning.

Scope:

Clean up public-facing WordPress staging presentation only. Do not change production DNS. Do not modify SheetBot.

Implementation notes:

- Removed internal metadata from public resource post body content:
  - Status: DRAFT
  - Slug
  - Meta Title
  - Meta Description
  - Tags
- Removed duplicate body-level resource titles where WordPress already renders the public title.
- Kept useful public-facing headings and resource content.
- Kept disclaimers visible where needed.
- Confirmed legal-adjacent template cautions remain visible.
- Confirmed the cost estimate budgeting/procurement caution remains visible.
- Replaced default theme navigation with focused links:
  - Home
  - About
  - Resources
  - Disclaimer
  - Contact
- Replaced default footer/demo links with CiviCore Resource Library footer content and approved navigation links.
- Added a Resources anchor to the homepage Browse by Category section.
- Updated the About page slug so /about/ works as the intended public About page URL.
- Confirmed resource posts keep clean slugs.
- Confirmed category and tag pages still work.
- Confirmed staging pages still include public noindex, nofollow robots meta.
- Confirmed no active SheetBot links.
- Confirmed no active lead capture.
- Confirmed no AdSense.
- Confirmed no active premium downloads.
- No production DNS changes made.
- No SheetBot files or configuration modified.

Acceptance criteria:

- Public pages/posts no longer display internal draft metadata.
- Footer/header no longer show irrelevant default demo links.
- Main navigation reflects CiviCore Resource Library structure.
- /about/ works as the intended About page URL.
- Resource post formatting remains clean.
- Disclaimers remain visible where needed.
- Staging indexing remains disabled.
- No production DNS changes made.
- No SheetBot files or configuration modified.

---

### CTRL-023: Perform WordPress Staging Front-End QA

Status: DONE

Owner: User / ChatGPT

Priority: High

Context:

The first staging publication is complete. The required pages, homepage, and first 10 resource posts are now published on WordPress staging. A front-end QA pass was performed before considering production preparation.

Scope:

Review the public-facing staging website only. Do not change production DNS. Do not modify SheetBot.

Implementation notes:

- Front-end QA completed on WordPress staging.
- No blocking functionality issues found.
- Homepage loads correctly.
- Homepage is set as the static front page.
- Required pages load:
  - /about/ redirects to /about-civicore-resources/ and loads correctly.
  - /contact/ loads correctly.
  - /disclaimer/ loads correctly.
  - /privacy-policy/ loads correctly.
- First 10 resource post URLs load correctly.
- Google Workspace post uses /google-workspace-folder-structure-small-offices/.
- Category archive pages load correctly.
- Tags display appropriately.
- Resource pages are readable on desktop and mobile.
- Disclaimers display where needed.
- Legal-adjacent templates remain cautious.
- Cost estimate template includes budgeting/procurement caution.
- Reply forms are not visible on resource posts.
- No default WordPress Hello world or Sample Page content appears.
- No active SheetBot links found.
- No active lead capture forms found.
- No AdSense or active premium downloads found.
- Mobile viewport check passed with no horizontal overflow on sampled pages.
- Staging pages include public noindex, nofollow robots meta.
- Existing civicore staging site remained reachable.
- Existing sheetbot staging site remained reachable.
- No SheetBot links, lead capture forms, AdSense, premium downloads, production DNS changes, or SheetBot changes found.
- Presentation cleanup is still required before production-readiness planning.
- No production DNS changes made.
- No SheetBot files or configuration modified.

Issues found:

- Published public content still displays internal draft metadata lines such as Status: DRAFT, Slug, Meta Title, Meta Description, and Tags.
- Theme/footer navigation still exposes default/demo-style links such as Blog, FAQs, Authors, Events, Shop, Patterns, and Themes.
- /about/ works through redirect, while the actual page URL is /about-civicore-resources/.

Follow-up:

- Added CTRL-024 to clean up public presentation before production-readiness planning.
- No blocking functionality issues were found.

Acceptance criteria:

- Front-end QA completed.
- Any layout/content/navigation issues listed.
- No production DNS changes made.
- No SheetBot files or configuration modified.
- If no blocking issues are found, project may proceed to production-readiness planning after presentation cleanup.

---

### CTRL-018: Configure Initial WordPress Content Structure

Status: DONE

Owner: User / Codex

Priority: High

Context:

WordPress staging was installed and accessible. The initial content structure was configured before importing, reviewing, and publishing the first staging content batch.

Scope:

Configure WordPress staging only. Do not publish public content until staging review is complete.

Completion notes:

- Initial WordPress content structure configured.
- Required categories created.
- Required pages created and later published on staging.
- First 10 resource posts created and later published on staging.
- Slugs, categories, and tags assigned.
- Staging indexing remains disabled.
- No SheetBot links activated.
- No lead capture activated.
- No production DNS changes made.
- No SheetBot files or configuration modified.

Implementation notes:

- WordPress staging content structure configured.
- WordPress staging settings confirmed.
- Staging search engine indexing disabled.
- Permalink structure set to Post name.
- Timezone set to Manila or UTC+8.
- Initial WordPress categories created:
  - LGU Letters
  - Project Proposal Templates
  - Right-of-Way and Permit-to-Enter
  - Water District Resources
  - Office Digitalization Guides
  - Calculators and Tools
- Required pages created as drafts:
  - Homepage
  - About CiviCore Resources
  - Contact
  - Disclaimer
  - Privacy Policy
- First 10 resource posts created as drafts.
- Slugs and categories assigned according to the content import checklist.
- Required pages and first 10 resource posts were later published on staging under CTRL-022.
- No SheetBot links activated.
- No lead capture activated.
- No production DNS changes made.
- No SheetBot files or configuration modified.

Acceptance criteria:

- Required categories exist.
- Required pages exist.
- First 10 resource posts exist.
- Slugs match planned URLs.
- Staging indexing remains disabled.
- No production DNS changes made.
- No SheetBot files or config modified.

---

### CTRL-022: Controlled Publish on WordPress Staging

Status: DONE

Owner: User

Priority: High

Context:

Final staging review passed with no remaining corrections. The prepared pages and first 10 resource posts were published on WordPress staging for front-end testing.

Scope:

Publish content on WordPress staging only. Do not publish to production. Do not change production DNS. Keep staging indexing disabled.

Implementation notes:

- Published required pages on staging in controlled order:
  - Disclaimer
  - Privacy Policy
  - About CiviCore Resources
  - Contact
  - Homepage
- Published first 10 resource posts on staging:
  - LGU Request Letter Template
  - Barangay Project Proposal Template
  - Permit to Enter Private Property Template
  - Right-of-Way Agreement Template
  - Water System Project Proposal Template
  - Street Lighting Project Proposal Template
  - Water District Website Modernization Checklist
  - Office Digitalization Starter Guide
  - Google Workspace Folder Structure for Small Offices
  - Basic Project Cost Estimate Template
- Homepage published and set as static front page.
- Staging indexing remains disabled.
- Permalinks confirmed as Post name.
- Comments remain disabled on resource posts; reply forms are not visible.
- Google Workspace post slug corrected to /google-workspace-folder-structure-small-offices/.
- Front-end URLs verified for Homepage, required pages, and first 10 resource posts.
- Categories and tags display correctly.
- No active SheetBot links found.
- No lead capture forms found.
- No AdSense found.
- No active premium downloads found.
- No production DNS changes made.
- No SheetBot files or configuration modified.

Acceptance criteria:

- Required pages are published on staging.
- Homepage is published and set as static front page.
- First 10 resource posts are published on staging.
- Front-end URLs load correctly.
- Categories and tags display correctly.
- Staging indexing remains disabled.
- No production DNS changes made.
- No SheetBot files or configuration modified.

---

### CTRL-021: Final Review Before Staging Publish

Status: DONE

Owner: User / ChatGPT

Priority: High

Context:

The WordPress staging content structure has been configured and cleanup is complete. Before publishing any pages or resource posts on staging, a final review confirmed that the site is safe, clean, and ready for staging publication.

Scope:

Review WordPress staging only. Do not touch production DNS. Do not modify SheetBot.

Implementation notes:

- Final review completed.
- Staging indexing remains disabled.
- Default WordPress content is no longer publicly visible.
- Only the prepared CiviCore Privacy Policy draft remains active as a draft.
- Required pages are present as drafts: Homepage, About CiviCore Resources, Contact, Disclaimer, Privacy Policy.
- First 10 resource posts are present as drafts.
- Categories are correctly assigned.
- Tags are conservative and relevant.
- Comments are disabled on resource posts; reply forms are not visible.
- Slug metadata matches the content import checklist.
- Disclaimers are present where needed.
- Legal-adjacent templates remain cautious.
- Cost estimate template includes budgeting/procurement caution.
- No active SheetBot links found.
- No lead capture forms found.
- No AdSense found.
- No active premium downloads found.
- No production DNS changes made.
- No production changes made.
- No SheetBot files or configuration modified.
- No remaining corrections identified.
- Staging content may proceed to controlled publishing if approved.

Acceptance criteria:

- Final review completed.
- Any remaining corrections listed.
- If no corrections are needed, staging content may proceed to controlled publishing.
- No production changes made.
- No SheetBot files or configuration modified.

---

### CTRL-019: Review WordPress Staging Content

Status: DONE

Owner: Codex / ChatGPT

Priority: High

Context:

The initial WordPress content structure was reviewed in staging before publishing any content. The drafted pages and resource posts were reviewed for completeness, tone, formatting, slugs, categories, disclaimers, and staging safety.

Scope:

Review the WordPress staging dashboard and front-end previews only. Do not publish content yet.

Implementation notes:

- Staging content review completed.
- Staging indexing is disabled.
- Permalink structure is set to /%postname%/.
- Timezone is set to UTC+8.
- All 10 resource posts exist as drafts.
- Required pages exist as drafts: Homepage, About, Contact, Disclaimer, Privacy Policy.
- Resource categories are assigned correctly.
- Draft content has expected sections.
- Legal-adjacent drafts include cautionary disclaimer language.
- Cost estimate draft includes stronger cost/budget/procurement caution.
- Cleanup issues were identified and resolved under CTRL-020.
- Default WordPress public content removed.
- Duplicate/default Privacy Policy draft removed.
- Tags added to all 10 resource drafts.
- Comments disabled on all 10 resource drafts.
- No active SheetBot links found or activated.
- No lead capture form found or activated.
- No content published yet.

Acceptance criteria:

- Required pages are reviewed.
- First 10 resource posts are reviewed.
- Any needed content corrections are listed.
- No content is published until approved.
- Staging indexing remains disabled.
- No SheetBot links or lead capture are activated.

---

### CTRL-020: Clean Up WordPress Staging Default Content

Status: DONE

Owner: User / Codex

Priority: High

Context:

WordPress staging content review found default WordPress content and setup items that needed cleanup before approval or publishing.

Scope:

Perform cleanup in WordPress staging dashboard only. Do not modify server configuration. Do not modify SheetBot.

Implementation notes:

- Default Hello world! post moved to Trash.
- Default Sample Page moved to Trash.
- Default WordPress Privacy Policy draft moved to Trash.
- Prepared CiviCore Privacy Policy draft retained.
- Conservative tags added to all 10 resource post drafts.
- Comments disabled on the 10 resource post drafts.
- Uncategorized no longer has public/default content attached.
- Homepage remains draft and is not configured as the front page yet.
- No content was published.
- No active SheetBot links found or activated.
- No lead capture form found or activated.
- No production DNS changes made.
- No server configuration changed.
- No SheetBot files or configuration modified.

Acceptance criteria:

- Default Hello world! post removed or unpublished.
- Default Sample Page removed or unpublished.
- Only the prepared CiviCore Privacy Policy draft remains.
- Resource posts have relevant conservative tags.
- Comments are disabled for resource posts.
- No default WordPress public content remains visible.
- No content published yet unless approved.
- No SheetBot files or configuration modified.

---

### CTRL-017: Install WordPress Staging Site

Status: DONE

Owner: User / Codex

Priority: High

Context:

Install and validate the WordPress staging site for the CiviCore Resource and Template Library.

Implementation notes:

- WordPress staging installation completed on ccit-serv1.
- Staging URL is accessible: https://resources-staging.civicoreit.com.
- WordPress dashboard login confirmed successful.
- Initial database connection issue was resolved by creating the missing MySQL user and granting database privileges.
- curl tests passed.
- Existing civicore and sheetbot sites remained accessible.
- Web root used: /var/www/resources-staging.
- Nginx config used: /etc/nginx/sites-available/resources-staging.
- PHP-FPM socket used: /run/php/php8.3-fpm.sock.
- No SheetBot files or configuration were modified.

---

### CTRL-016: Prepare DNS for WordPress Staging

Status: DONE

Owner: User

Priority: High

Context:

The staging domain must point to the verified DigitalOcean server before SSL can be issued and before WordPress staging can be fully validated.

DNS record:

- Type: A
- Host/Name: resources-staging
- FQDN: resources-staging.civicoreit.com
- Points to: 159.65.2.194
- TTL: default/automatic

Acceptance criteria:

- resources-staging.civicoreit.com resolves to 159.65.2.194.
- No production resources.civicoreit.com DNS record is required yet.
- No WordPress installation performed yet.
- No server configuration changed yet.
- No SheetBot files or configuration modified.

Implementation notes:

- DNS record prepared or added by user.
- DNS record for resources-staging.civicoreit.com confirmed resolving to 159.65.2.194.
- No production resources.civicoreit.com DNS record required yet.

---

### CTRL-014: Verify Target Server for WordPress Staging

Status: DONE

Owner: User / Codex

Priority: High

Context:

Before installing WordPress or changing DNS/server configuration, the target DigitalOcean server must be verified.

Implementation notes:

- Server verified as ccit-serv1.
- Nginx confirmed on ports 80/443.
- PHP 8.3-FPM confirmed active.
- PHP-FPM socket confirmed as /run/php/php8.3-fpm.sock.
- MySQL confirmed available.
- Certbot confirmed available.
- Existing civicore and sheetbot Nginx sites identified.
- Findings recorded in /docs/Server_Verification_Report.md.
- No WordPress installation performed.
- No server configuration changed.
- No SheetBot files or config modified.

---

Completion notes for CTRL-012 through CTRL-013:

- WordPress staging setup checklist created.
- WordPress content import checklist created.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-013: Prepare WordPress Content Import Checklist

Status: DONE

Owner: ChatGPT / Codex

Priority: Medium

Context:

Create the WordPress content import checklist and mapping document for converting repository markdown content into WordPress draft pages and posts.

Implementation notes:

- WordPress content import checklist created.
- Created /docs/WordPress_Content_Import_Checklist.md.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-012: Prepare WordPress Staging Setup Checklist

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Create the WordPress staging setup checklist before installing WordPress or changing server configuration.

Implementation notes:

- WordPress staging setup checklist created.
- Created /docs/WordPress_Staging_Setup_Checklist.md.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

---

Completion notes for CTRL-009 through CTRL-011:

- WordPress staging deployment plan created.
- WordPress content publishing plan created.
- Required WordPress page drafts created.
- Homepage, About, Contact, Disclaimer, and Privacy Policy drafts prepared.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-011: Prepare WordPress Required Pages Drafts

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Create draft content for the required WordPress non-resource pages.

Implementation notes:

- Required WordPress page drafts created.
- Homepage, About, Contact, Disclaimer, and Privacy Policy drafts prepared.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-010: Prepare WordPress Content Publishing Plan

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Create the WordPress content publishing plan for converting markdown drafts into WordPress public resources.

Implementation notes:

- WordPress content publishing plan created.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-009: Plan WordPress Staging Deployment

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Create the WordPress staging deployment planning document before installing WordPress or changing server configuration.

Implementation notes:

- WordPress staging deployment plan created.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-008: Draft First 10 Resource Pages

Status: DONE

Owner: ChatGPT / Codex

Priority: Medium

Context:

Prepare the first resource content draft structure for the CiviCore Resource and Template Library.

Scope:

- Create the /content folder structure.
- Create first 10 draft placeholder files under /content/drafts.
- Keep the work content/documentation-only.
- Do not install WordPress.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- /content exists.
- /content/drafts exists.
- /content/templates exists.
- /content/guides exists.
- /content/tools exists.
- First 10 draft placeholder files exist under /content/drafts.
- Each placeholder uses the standard draft structure.

Implementation notes:

- Content draft directory created.
- First 10 resource draft placeholders created.
- First 3 draft resources completed.
- Batch 2 completed.
- Right-of-way agreement draft completed.
- Water system project proposal draft completed.
- Street lighting project proposal draft completed.
- Batch 3 completed.
- Remaining 4 draft resources completed.
- First 10 resource drafts are now complete.
- Content review checklist created.
- Drafts reviewed for completeness, tone, SEO fields, disclaimers, and formatting.
- Empty content folders preserved using .gitkeep files.
- No WordPress installation yet.
- No application logic added.
- No SheetBot files modified.

---

Completion notes for CTRL-002 through CTRL-007:

- Initial ADRs created.
- ADR-001 accepted: WordPress for v1.
- ADR-002 accepted: resources.civicoreit.com.
- Content strategy created.
- Publishing workflow created.
- Template disclaimer guide created.
- No application logic added.
- No SheetBot files modified.

### CTRL-007: Create template disclaimer guide

Status: DONE

Owner: Codex

Priority: High

Context:

Create the template disclaimer guide for the CiviCore Resource and Template Library.

Implementation notes:

- Template disclaimer guide created.
- Created /docs/Template_Disclaimer_Guide.md.
- No application logic added.
- No SheetBot files modified.

### CTRL-006: Create publishing workflow

Status: DONE

Owner: Codex

Priority: High

Context:

Create the publishing workflow document for the CiviCore Resource and Template Library.

Implementation notes:

- Publishing workflow created.
- Created /docs/Publishing_Workflow.md.
- No application logic added.
- No SheetBot files modified.

### CTRL-005: Create initial content strategy

Status: DONE

Owner: Codex

Priority: High

Context:

Create the initial content strategy document for the CiviCore Resource and Template Library.

Implementation notes:

- Content strategy created.
- Created /docs/Content_Strategy.md.
- No WordPress installation was performed.
- No application logic added.
- No SheetBot files modified.

### CTRL-004: Finalize URL strategy decision

Status: DONE

Owner: User + ChatGPT

Context:

Review ADR-002 and decide whether the public library should use resources.civicoreit.com or civicoreit.com/resources.

Implementation notes:

- ADR-002 accepted: resources.civicoreit.com.
- No application logic added.
- No SheetBot files modified.

### CTRL-003: Finalize platform architecture decision

Status: DONE

Owner: User + ChatGPT

Context:

Review ADR-001 and decide whether the initial platform should use WordPress, Laravel, a static site generator, or a hybrid approach.

Implementation notes:

- ADR-001 accepted: WordPress for v1.
- No application logic added.
- No SheetBot files modified.

### CTRL-002: Create initial project ADRs

Status: DONE

Owner: Codex

Priority: High

Context:

Create the initial Architecture Decision Record files for the CiviCore Resource and Template Library.

Implementation notes:

- Initial ADRs created.
- Created /adr/ADR-001-Platform-Architecture.md.
- Created /adr/ADR-002-URL-Strategy.md.
- Created /adr/ADR-003-Content-Review-Policy.md.
- Created /adr/ADR-004-Monetization-Path.md.
- No application logic added.
- No SheetBot files modified.

### CTRL-001: Create initial AIOS project structure

Status: DONE

Owner: Codex

Context:

Create the initial AIOS project structure for the CiviCore Resource and Template Library.

Scope:

- Create required project folders.
- Create required starter documentation files.
- Add a simple README.
- Keep this project separate from SheetBot.
- Do not add application logic yet.

Files modified:

- /docs
- /tasks
- /prompts
- /adr
- Project_Context.md
- Engineering_Rules.md
- TASKS.md
- HANDOFF.md
- README.md

Acceptance criteria:

- Required folders exist.
- Required root documentation files exist.
- README includes project name, purpose, audience, SheetBot boundary, and AIOS workflow reference.
- No SheetBot files, deployment, database, or configuration are modified.

Implementation notes:

- AIOS project structure created.
- Repository initialized and pushed to GitHub.
- Empty folders preserved using .gitkeep.
- No SheetBot files found or modified.
- Commit: b85177e Initialize AIOS project structure.

---

## BLOCKED

No blocked tasks.
