# Production Deployment Plan

## Purpose

Prepare a safe production deployment plan for launching the CiviCore Resource Library at:

https://resources.civicoreit.com

This plan is for documentation and planning only. It does not authorize DNS changes, production WordPress installation, server configuration changes, or changes to existing CiviCore or SheetBot services.

## Confirmed Deployment Target

Production server:

- Hostname: ccit-prod-1
- Public IP: 159.89.206.141

Existing live sites on the same server:

- https://civicoreit.com/
- https://sheetbot.civicoreit.com/

Staging server:

- Hostname: ccit-serv1
- Public IP: 159.65.2.194
- Staging URL: https://resources-staging.civicoreit.com

## Production DNS Target

Production DNS record to add only after launch approval:

A record:

- Host/Name: resources
- FQDN: resources.civicoreit.com
- Points to: 159.89.206.141
- TTL: default/automatic

Important:

- Do not point production DNS to 159.65.2.194.
- Do not change production DNS until production launch is approved.

## Deployment Strategy Decision

Use a separate production WordPress install.

Rationale:

- Keeps staging and production separated.
- Avoids turning staging into production.
- Reduces risk to the future testing workflow.
- Allows production-specific database, web root, Nginx config, SSL, and WordPress settings.
- Protects existing live sites from accidental changes.

Suggested production structure:

- Web root: /var/www/resources-production
- Database: resources_production_wp
- Database user: resources_prod_wp_user
- Nginx config: /etc/nginx/sites-available/resources-production
- Nginx enabled symlink: /etc/nginx/sites-enabled/resources-production
- Domain: resources.civicoreit.com
- PHP-FPM socket: use the verified production server socket from Production_Server_Verification_Report.md

## Production Safety Principles

- Do not modify the existing civicoreit.com Nginx config.
- Do not modify the existing sheetbot.civicoreit.com Nginx config.
- Create a new isolated Nginx server block for resources.civicoreit.com.
- Use a separate database and database user.
- Use a separate web root.
- Take a DigitalOcean snapshot before production work.
- Back up existing Nginx configs before production work.
- Keep the staging site noindex after production launch.
- Do not activate SheetBot links during initial launch unless separately approved.
- Do not activate lead capture during initial launch unless the Privacy Policy has been reviewed.

## Pre-Deployment Backup Checklist

- Take DigitalOcean snapshot of ccit-prod-1.
- Back up existing Nginx configs.
- Record current Nginx enabled sites.
- Record current DNS state.
- Export staging WordPress content.
- Export staging database if needed.
- Confirm credentials are stored securely and not committed to GitHub.

## Production Installation Checklist

Planning only. Do not execute yet.

- Create production web root.
- Create production database and user.
- Download/install WordPress or migrate files.
- Configure wp-config.php.
- Create isolated Nginx server block.
- Test Nginx config.
- Reload Nginx.
- Add production DNS only when approved.
- Issue SSL after DNS resolves.
- Complete WordPress setup or import staging content.
- Set production Site URL and Home URL.
- Set permalink structure to Post name.
- Set timezone to UTC+8.
- Confirm comments disabled on resource posts.
- Confirm homepage as static front page.

## Content Migration Plan

Recommended approach:

- Export staging WordPress content using the WordPress export tool.
- Import into production WordPress.
- Recheck pages, posts, categories, tags, slugs, navigation, homepage, footer, and disclaimers.
- Keep staging available for future testing.

Alternative:

- Manually copy pages/posts if export/import causes formatting issues.

## SEO and Indexing Plan

- Keep staging noindex/nofollow.
- Production should remain noindex until final validation is complete.
- Remove noindex on production only at public launch approval.
- Configure SEO plugin if selected.
- Confirm meta titles and descriptions.
- Generate sitemap.
- Review robots.txt.
- Add Google Search Console later.
- Do not submit the staging sitemap.

## Security Checklist

- Use a strong production admin username and password.
- Do not use the username "admin".
- Limit admin accounts.
- Install only minimal trusted plugins.
- Keep WordPress, themes, and plugins updated.
- Install a backup plugin if selected.
- Install a security plugin if selected.
- Confirm file permissions.
- Disable file editing in wp-config.php if appropriate:

```php
define('DISALLOW_FILE_EDIT', true);
```

- Do not commit secrets to GitHub.

## Post-Deployment Validation Checklist

- https://resources.civicoreit.com loads.
- WordPress dashboard is accessible.
- HTTPS works.
- Homepage loads.
- Required pages load:
  - /about/
  - /contact/
  - /disclaimer/
  - /privacy-policy/
- First 10 resource posts load.
- Categories and tags work.
- Navigation and footer are clean.
- Mobile view works.
- Comments are disabled.
- Disclaimers are visible.
- No SheetBot links are active unless approved.
- No lead capture is active unless approved.
- Existing https://civicoreit.com/ remains working.
- Existing https://sheetbot.civicoreit.com/ remains working.

## Launch Hold Conditions

Do not proceed if:

- Snapshot is missing.
- DNS control is not confirmed.
- SSL fails.
- Nginx config test fails.
- Production WordPress admin cannot be secured.
- Existing civicoreit.com is affected.
- Existing sheetbot.civicoreit.com is affected.
- Disclaimers are missing.
- Privacy Policy is not acceptable for enabled features.
- Production noindex removal has not been approved.
