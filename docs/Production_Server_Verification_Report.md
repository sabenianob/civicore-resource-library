# Production Server Verification Report

## Purpose

Record read-only production server verification findings for the CiviCore Resource and Template Library deployment preparation.

This report documents server facts only. No WordPress production installation was performed, no server configuration was changed, no DNS records were changed, and no SheetBot files or configuration were modified.

## Target Server

- Server name: ccit-prod-1
- Public IP: 159.89.206.141
- Private IPs reported: 10.15.0.7, 10.104.0.5
- Intended future resource library URL: https://resources.civicoreit.com

## Existing Live Sites

- https://civicoreit.com/
  - Public check: HTTP 200
  - Page title: CivicCore IT Solutions | Government-Ready Digital Systems
- https://sheetbot.civicoreit.com/
  - Public check: HTTP 200
  - Page title: SheetBot | Turn Plain Text Into Organized Transactions

## Operating System

- Ubuntu 24.04.4 LTS
- Codename: noble

## Web Server

- Nginx is installed and listening on ports 80 and 443.
- Nginx version: nginx/1.24.0 (Ubuntu)
- Apache was not found.

## PHP

- PHP CLI version: PHP 8.3.6
- PHP-FPM service: php8.3-fpm.service is loaded, active, and running.
- PHP-FPM sockets found:
  - /run/php/php8.3-fpm.sock
  - /run/php/php8.3-fpm-sheetbot.sock
  - /run/php/php-fpm.sock
- PHP configuration directory:
  - /etc/php/8.3

## Database

- MariaDB/MySQL client is available.
- Version reported: mysql Ver 15.1 Distrib 10.11.14-MariaDB.

## Firewall

- UFW is active.
- Allowed profiles/rules include:
  - OpenSSH
  - Nginx Full
  - OpenSSH (v6)
  - Nginx Full (v6)

## SSL Tooling

- Certbot is available.
- Version reported: certbot 2.9.0

## Disk Space

- Root filesystem: 67G total, 2.8G used, 64G available, 5% used.
- Boot partition: 881M total, 117M used, 703M available, 15% used.

## Nginx Site Configuration

Available site configs:

- /etc/nginx/sites-available/civicoreit.com
- /etc/nginx/sites-available/default
- /etc/nginx/sites-available/sheetbot

Enabled site configs:

- /etc/nginx/sites-enabled/civicoreit.com -> /etc/nginx/sites-available/civicoreit.com
- /etc/nginx/sites-enabled/default -> /etc/nginx/sites-available/default
- /etc/nginx/sites-enabled/sheetbot -> /etc/nginx/sites-available/sheetbot

Nginx summary:

- civicoreit.com and www.civicoreit.com use root:
  - /var/www/civicoreit.com/public
- civicoreit.com PHP handling uses:
  - fastcgi_pass unix:/run/php/php8.3-fpm.sock
- sheetbot.civicoreit.com uses root:
  - /var/www/sheetbot/public
- sheetbot.civicoreit.com PHP handling uses:
  - fastcgi_pass unix:/run/php/php8.3-fpm-sheetbot.sock

## Web Roots

Observed /var/www entries:

- /var/www/apps
- /var/www/backups
- /var/www/civicoreit.com
- /var/www/html
- /var/www/sheetbot
- /var/www/sheetbot_archive_current

## Backup Notes

Server-local backup-related paths were observed:

- /var/www/backups
- /root/sheetbot-backups
- /var/backups contains standard system package backup files.

DigitalOcean snapshot availability was not confirmed from the server shell. Confirm a current DigitalOcean snapshot or equivalent backup in the DigitalOcean control panel before any production deployment changes.

## Production DNS Direction

- resources.civicoreit.com should point to production server IP 159.89.206.141 when production launch is approved.
- Do not point production DNS to the staging server 159.65.2.194.
- No DNS changes were made during this verification.

## Assessment

- Production server stack is identified.
- Existing live site configs are identified.
- Nginx + PHP 8.3-FPM + MariaDB are available for a future WordPress production deployment.
- Existing civicoreit.com and sheetbot.civicoreit.com live sites are present and reachable.
- A production deployment plan should not be created until this verification is reviewed and accepted.

## Safety Confirmation

- No configuration files were modified.
- No WordPress production installation was performed.
- No DNS changes were made.
- No SheetBot files or configuration were modified.
