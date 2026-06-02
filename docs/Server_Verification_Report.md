# Server Verification Report

## Purpose

Record read-only server verification findings for the CiviCore Resource and Template Library WordPress staging preparation.

This report documents server facts only. No WordPress installation was performed, no server configuration was changed, and no SheetBot files or configuration were modified.

## Target Server

- Server name: ccit-serv1
- Intended use: WordPress staging environment for the CiviCore Resource and Template Library
- Proposed staging URL: https://resources-staging.civicoreit.com

## Verified Stack Summary

- Web server: Nginx
- PHP: PHP 8.3 with PHP-FPM
- Database: MySQL available
- SSL tooling: Certbot available
- Existing staging sites identified

## PHP-FPM Findings

- php8.3-fpm.service is loaded, active, and running.
- PHP socket files available:
  - /run/php/php-fpm.sock
  - /run/php/php8.3-fpm.sock
- PHP configuration directory:
  - /etc/php/8.3
- Recommended PHP-FPM socket for Nginx WordPress config:
  - unix:/run/php/php8.3-fpm.sock

## Nginx Configuration Findings

- sudo nginx -T syntax check passed.
- Existing active server names include:
  - civicore-staging.abrdns.com
  - sheetbot-staging.abrdns.com
- Existing roots include:
  - /var/www/civicore-showcase/dist
  - /var/www/micro-saas-platform/public
- Existing SheetBot PHP handling uses:
  - fastcgi_pass unix:/run/php/php8.3-fpm.sock

## Assessment

- Server is suitable for WordPress staging.
- Use Nginx + PHP 8.3-FPM + MySQL.
- Create a separate Nginx server block for resources-staging.civicoreit.com.
- Do not modify existing civicore or sheetbot Nginx configs.

## Safety Notes

- WordPress should not be installed until the installation command plan is reviewed and approved.
- Server configuration should not be changed until the implementation task is approved.
- Existing civicore and sheetbot Nginx configs should be backed up before any future server changes.
- SheetBot files, routes, database, deployment, and server configuration must remain untouched.
