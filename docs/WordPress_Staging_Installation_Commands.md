# WordPress Staging Installation Commands

## 1. Purpose

Prepare reviewed commands for installing WordPress staging later at:

```text
https://resources-staging.civicoreit.com
```

These commands are for manual execution only after review and approval. Do not execute these commands as part of this planning document.

No WordPress installation has been performed. No live server configuration has been changed.

## 2. Confirmed Stack

- Ubuntu server
- Nginx
- PHP 8.3-FPM
- MySQL 8.0
- Certbot
- Web root: /var/www/resources-staging
- Nginx config: /etc/nginx/sites-available/resources-staging
- PHP-FPM socket: unix:/run/php/php8.3-fpm.sock

## 3. Pre-Install Safety Checks

Run these read-only checks before making changes:

```bash
hostname
sudo nginx -t
sudo cp /etc/nginx/sites-available/civicore /root/civicore.nginx.backup.$(date +%F-%H%M%S) 2>/dev/null || true
sudo cp /etc/nginx/sites-available/sheetbot /root/sheetbot.nginx.backup.$(date +%F-%H%M%S) 2>/dev/null || true
```

Do not edit existing civicore or sheetbot configs.

Confirm a snapshot or backup exists before continuing.

## 4. Create Web Root

```bash
sudo mkdir -p /var/www/resources-staging
sudo chown -R www-data:www-data /var/www/resources-staging
sudo chmod -R 755 /var/www/resources-staging
```

## 5. Create Database

Open MySQL:

```bash
sudo mysql
```

SQL placeholder:

```sql
CREATE DATABASE resources_staging_wp DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'resources_wp_user'@'localhost' IDENTIFIED BY 'REPLACE_WITH_STRONG_PASSWORD';
GRANT ALL PRIVILEGES ON resources_staging_wp.* TO 'resources_wp_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

Store database credentials securely. Do not commit credentials to GitHub.

## 6. Download WordPress

```bash
cd /tmp
curl -O https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
sudo rsync -av wordpress/ /var/www/resources-staging/
sudo chown -R www-data:www-data /var/www/resources-staging
```

## 7. Configure wp-config.php

```bash
cd /var/www/resources-staging
sudo -u www-data cp wp-config-sample.php wp-config.php
```

Edit database credentials manually:

```bash
sudo nano /var/www/resources-staging/wp-config.php
```

Generate salts using the WordPress.org secret-key service manually, then paste them into wp-config.php:

```text
https://api.wordpress.org/secret-key/1.1/salt/
```

Do not store generated salts or database credentials in GitHub.

## 8. Create Nginx Server Block

Create the server block:

```bash
sudo nano /etc/nginx/sites-available/resources-staging
```

Config template:

```nginx
server {
    listen 80;
    listen [::]:80;

    server_name resources-staging.civicoreit.com;

    root /var/www/resources-staging;
    index index.php index.html index.htm;

    access_log /var/log/nginx/resources-staging.access.log;
    error_log /var/log/nginx/resources-staging.error.log;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

Enable and test:

```bash
sudo ln -s /etc/nginx/sites-available/resources-staging /etc/nginx/sites-enabled/resources-staging
sudo nginx -t
sudo systemctl reload nginx
```

Do not modify existing civicore or sheetbot configs.

## 9. DNS Requirement

Before SSL, confirm DNS A record:

```text
resources-staging.civicoreit.com -> 159.65.2.194
```

Wait for DNS propagation before issuing SSL.

## 10. SSL with Certbot

```bash
sudo certbot --nginx -d resources-staging.civicoreit.com
```

After Certbot completes, confirm HTTPS and HTTP-to-HTTPS redirect behavior.

## 11. WordPress Setup Wizard

Open:

```text
https://resources-staging.civicoreit.com
```

Checklist:

- [ ] Complete setup.
- [ ] Create strong admin account.
- [ ] Disable search engine indexing.
- [ ] Set timezone.
- [ ] Set permalinks to post name.

## 12. Initial Staging Validation

Validate:

- [ ] Homepage loads.
- [ ] wp-admin loads.
- [ ] HTTPS works.
- [ ] Permalinks work.
- [ ] Nginx test passes.
- [ ] Existing civicore-staging site still works.
- [ ] Existing sheetbot-staging site still works.

## 13. Rollback Notes

If rollback is needed:

- Remove Nginx symlink.
- Reload Nginx.
- Remove web root only if needed.
- Drop database only if needed.
- Do not touch civicore or sheetbot configs.

Example rollback commands:

```bash
sudo rm /etc/nginx/sites-enabled/resources-staging
sudo nginx -t
sudo systemctl reload nginx
```

Only remove files or databases after confirming they belong to the resources staging site.
