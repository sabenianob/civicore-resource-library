# WordPress Staging Setup Checklist

## 1. Purpose

Prepare a safe, step-by-step checklist before installing WordPress for the CiviCore Resource and Template Library staging site.

This checklist is planning-only until an approved implementation task is created. It does not install WordPress, change DNS, update server configuration, or modify any live system.

## 2. Confirmed Project Decisions

- Platform: WordPress for v1
- Production URL: https://resources.civicoreit.com
- Proposed staging URL: https://resources-staging.civicoreit.com
- Project is separate from SheetBot
- No SheetBot files or server configuration should be modified

## 3. Pre-Server Verification

Before making any server changes, confirm:

- [ ] Confirm target DigitalOcean server.
- [ ] Confirm whether server uses Nginx or Apache.
- [ ] Confirm PHP version.
- [ ] Confirm MySQL or MariaDB availability.
- [ ] Confirm available disk space.
- [ ] Confirm firewall status.
- [ ] Confirm current hosted sites on the server.
- [ ] Confirm backup/snapshot availability before changes.

Pre-server notes:

- Identify all currently hosted sites before making configuration changes.
- Confirm the staging site will not interfere with existing services.
- Take a snapshot before any installation or configuration work.

## 4. DNS Checklist

DNS planning items:

- [ ] Identify DNS provider for civicoreit.com.
- [ ] Prepare A record for resources-staging.
- [ ] Prepare A record for resources.
- [ ] Confirm DNS propagation after records are added.

Use placeholder IP values during planning:

```text
A record: resources-staging -> SERVER_IP
A record: resources -> SERVER_IP
```

DNS notes:

- Do not change DNS until the implementation task is approved.
- Confirm staging and production records point to the correct servers before launch.
- Allow time for DNS propagation.

## 5. Database Checklist

Database setup items:

- [ ] Create WordPress database.
- [ ] Create dedicated database user.
- [ ] Grant only required privileges.
- [ ] Store credentials securely.
- [ ] Do not commit credentials to GitHub.

Database notes:

- Use a dedicated database and user for the staging site.
- Avoid reusing production credentials.
- Store credentials in a secure internal location, not in repository files.

## 6. Web Server Checklist

Confirm whether the server uses Nginx or Apache before proceeding.

### Nginx

- [ ] Create server block.
- [ ] Set document root.
- [ ] Configure PHP-FPM.
- [ ] Add try_files for WordPress.
- [ ] Test Nginx config.
- [ ] Reload Nginx.

Nginx notes:

- Back up existing server block files before edits.
- Confirm no existing site configuration is overwritten.
- Test configuration before reload.

### Apache

- [ ] Create virtual host.
- [ ] Enable rewrite module if needed.
- [ ] Set document root.
- [ ] Test Apache config.
- [ ] Reload Apache.

Apache notes:

- Back up existing virtual host files before edits.
- Confirm no existing site configuration is overwritten.
- Test configuration before reload.

## 7. WordPress Installation Checklist

Planning items for WordPress installation:

- [ ] Download WordPress.
- [ ] Set proper ownership and permissions.
- [ ] Configure wp-config.php.
- [ ] Set salts.
- [ ] Run setup wizard.
- [ ] Create strong admin credentials.
- [ ] Disable search engine indexing on staging.
- [ ] Set timezone.
- [ ] Configure permalink structure to /%postname%/.

Installation notes:

- Do not use weak or shared admin credentials.
- Do not expose database credentials.
- Confirm staging remains non-indexed.
- Keep setup records in a secure internal location.

## 8. SSL Checklist

SSL setup items:

- [ ] Install or confirm Certbot.
- [ ] Issue certificate for resources-staging.civicoreit.com.
- [ ] Verify HTTPS.
- [ ] Confirm HTTP to HTTPS redirect.

SSL notes:

- Confirm DNS is pointing correctly before issuing the certificate.
- Confirm automatic renewal behavior after certificate setup.
- Test the site using HTTPS before content review.

## 9. Initial WordPress Configuration Checklist

Initial configuration items:

- [ ] Site title.
- [ ] Tagline.
- [ ] Permalinks.
- [ ] Disable staging indexing.
- [ ] Remove default sample content.
- [ ] Set homepage behavior.
- [ ] Create categories.
- [ ] Create required pages as drafts.
- [ ] Import or copy first 10 resources as draft posts.

Initial categories:

- LGU Letters
- Project Proposal Templates
- Right-of-Way and Permit-to-Enter
- Water District Resources
- Office Digitalization Guides
- Calculators and Tools

## 10. Minimal Plugin Checklist

Keep plugins conservative and install only what is needed.

Potential plugin categories:

- [ ] SEO plugin.
- [ ] Security plugin.
- [ ] Backup plugin.
- [ ] Caching plugin only if appropriate.
- [ ] Contact form plugin only if needed later.

Plugin notes:

- Avoid duplicate plugin functionality.
- Use reputable and actively maintained plugins.
- Remove unused plugins.
- Do not enable contact forms or public lead capture until privacy and review requirements are ready.

## 11. Staging Validation Checklist

Validate staging before production migration or launch:

- [ ] Homepage loads.
- [ ] Admin login works.
- [ ] HTTPS works.
- [ ] Permalinks work.
- [ ] Draft posts exist.
- [ ] Required pages exist.
- [ ] Categories exist.
- [ ] Staging is not indexed.
- [ ] No production SheetBot behavior affected.
- [ ] No unrelated sites affected.

Validation notes:

- Test desktop and mobile views.
- Confirm no test content is publicly indexed.
- Confirm no credentials or private server details appear in public pages.

## 12. Rollback Notes

Rollback preparation:

- [ ] Take snapshot before changes.
- [ ] Keep original server configs backed up.
- [ ] Revert DNS if needed.
- [ ] Disable staging site if needed.

Rollback notes:

- Document the files changed during setup.
- Keep backups of server block or virtual host files.
- Know how to disable the staging site without affecting unrelated sites.
- Confirm snapshot restore process before beginning installation work.
