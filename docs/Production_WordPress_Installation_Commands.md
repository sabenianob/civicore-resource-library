# Production WordPress Installation Commands

## Purpose

Prepare reviewed commands for installing the CiviCore Resource Library production WordPress site at:

https://resources.civicoreit.com

These commands are for later manual execution only after approval. Do not execute these commands as part of this documentation task.

## Confirmed Production Target

- Server: ccit-prod-1
- Public IP: 159.89.206.141
- Existing live sites:
  - https://civicoreit.com/
  - https://sheetbot.civicoreit.com/
- Production domain:
  - resources.civicoreit.com

## Safety Warnings

- Do not edit the existing CiviCore website Nginx config.
- Do not edit the existing SheetBot Nginx config.
- Do not reuse SheetBot database or files.
- Do not reuse CiviCore website database or files.
- Use separate web root, database, database user, and Nginx server block.
- Take a DigitalOcean snapshot before executing commands.
- Back up existing Nginx configs before executing commands.
- Do not remove staging site.

## Proposed Production Structure

- Web root: /var/www/resources-production
- Database: resources_production_wp
- Database user: resources_prod_wp_user
- Nginx config: /etc/nginx/sites-available/resources-production
- Enabled symlink: /etc/nginx/sites-enabled/resources-production
- Domain: resources.civicoreit.com
- PHP-FPM socket: use verified production socket from Production_Server_Verification_Report.md

## Phase 0: Pre-Execution Requirements

- DigitalOcean snapshot of ccit-prod-1 completed.
- DNS control confirmed.
- Production DNS not changed yet.
- Production server verification report reviewed.
- Staging site remains available.
- Staging content export prepared or planned.
- Strong database password generated and stored securely.

## Phase 1: Read-Only Safety Checks

```bash
hostname
hostname -I
sudo nginx -t
sudo ss -tulpn | grep -E ':80|:443'
df -h
sudo ufw status
```

## Phase 2: Back Up Existing Nginx Configs

```bash
sudo mkdir -p /root/nginx-backups
sudo cp -a /etc/nginx/sites-available /root/nginx-backups/sites-available.$(date +%F-%H%M%S)
sudo cp -a /etc/nginx/sites-enabled /root/nginx-backups/sites-enabled.$(date +%F-%H%M%S)
```

## Phase 3: Create Production Web Root

```bash
sudo mkdir -p /var/www/resources-production
sudo chown -R www-data:www-data /var/www/resources-production
sudo chmod -R 755 /var/www/resources-production
```

## Phase 4: Create Production Database

Open MariaDB/MySQL:

```bash
sudo mysql
```

Run SQL:

```sql
CREATE DATABASE resources_production_wp DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'resources_prod_wp_user'@'localhost' IDENTIFIED BY '<SECURE_PRODUCTION_DB_PASSWORD>';
GRANT ALL PRIVILEGES ON resources_production_wp.* TO 'resources_prod_wp_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

Do not commit database credentials to GitHub. Replace `<SECURE_PRODUCTION_DB_PASSWORD>` only during approved manual execution and store the credential securely.

## Phase 5: Install WordPress Files

```bash
cd /tmp
curl -O https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
sudo rsync -av wordpress/ /var/www/resources-production/
sudo chown -R www-data:www-data /var/www/resources-production
```

## Phase 6: Configure wp-config.php

```bash
cd /var/www/resources-production
sudo -u www-data cp wp-config-sample.php wp-config.php
sudo nano /var/www/resources-production/wp-config.php
```

Expected database constants:

```php
define( 'DB_NAME', 'resources_production_wp' );
define( 'DB_USER', 'resources_prod_wp_user' );
define( 'DB_PASSWORD', '<SECURE_PRODUCTION_DB_PASSWORD>' );
define( 'DB_HOST', 'localhost' );
```

Recommended hardening:

```php
define('DISALLOW_FILE_EDIT', true);
```

Replace WordPress salts with fresh production salts before completing setup.

## Phase 7: Create Isolated Nginx Server Block

Use this template. The PHP-FPM socket must match the verified production socket.

```nginx
server {
    listen 80;
    listen [::]:80;

    server_name resources.civicoreit.com;

    root /var/www/resources-production;
    index index.php index.html index.htm;

    access_log /var/log/nginx/resources-production.access.log;
    error_log /var/log/nginx/resources-production.error.log;

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

Commands:

```bash
sudo nano /etc/nginx/sites-available/resources-production
sudo ln -s /etc/nginx/sites-available/resources-production /etc/nginx/sites-enabled/resources-production
sudo nginx -t
sudo systemctl reload nginx
```

## Phase 8: DNS Requirement

- Type: A
- Host/Name: resources
- FQDN: resources.civicoreit.com
- Points to: 159.89.206.141
- TTL: default/automatic

Do not change production DNS until production launch approval is granted.

## Phase 9: SSL With Certbot

Run only after DNS resolves:

```bash
sudo certbot --nginx -d resources.civicoreit.com
```

## Phase 10: WordPress Setup or Import

- Open https://resources.civicoreit.com after DNS and SSL.
- Complete WordPress setup or import staging content.
- Use strong admin credentials.
- Do not use username admin.
- Set timezone to UTC+8.
- Set permalinks to Post name.
- Keep production noindex until final validation is complete.
- Import staging content using WordPress export/import or manual copy.
- Publish only after validation.

## Phase 11: Post-Install Validation

```bash
sudo nginx -t
curl -I https://resources.civicoreit.com
curl -I https://civicoreit.com/
curl -I https://sheetbot.civicoreit.com/
```

Checklist:

- resources.civicoreit.com loads.
- HTTPS works.
- WordPress dashboard accessible.
- civicoreit.com still works.
- sheetbot.civicoreit.com still works.
- No staging settings accidentally changed.
- Production noindex remains enabled until launch approval.

## Rollback Notes

- Remove resources-production Nginx symlink.
- Reload Nginx.
- Revert DNS if needed.
- Keep backups.
- Do not delete existing CiviCore or SheetBot configs.
- Drop production resource database only if rollback is approved.
