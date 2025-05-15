<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## The project consists of 3 main blocks:
- Frontend
- Backend (available under sub-url /rsadmin - HomeController.php, CourseController.php)
- API (available under sub-url /api - APIController.php)

Routes you can find in: /routes/api.php and /routes/web.php

CORs configuration is specified in: /config/cors.php
## Server installation
- Pull from git the source to
  public_html/
- Create DB and user
- Correct ENV varialbles in .env file, run composer update, run migrations:
```
nano .env
composer update
php artisan migrate:fresh
php artisan db:seed
```
- Then import the DB tables `courses_table` and `projects_subscribers` from the old system, as well as users data (if needed the schemas you can as well find in database/migrations/README.md).
- Run the following SQL to correct the Image URLs:
```
UPDATE courses_table SET course_image = REPLACE (course_image, 'https://rahulshettyacademy.com/rs_admin/public', '/assets') WHERE course_image LIKE 'https://rahulshettyacademy.com/rs_admin/public%';
```
## EMAILS
After attempt to send an email, log into your mail (gmail) and confirm the new device.
## ENV Config
Every time after editing the .env file, run the following commands:
```
php artisan config:cache
php artisan cache:clear
```

## Initial installation for local development
```
composer global require "laravel/installer=~1.1"
sudo composer create-project laravel/laravel rahulshettyacademy-laravel 4.2 --prefer-dist
composer require laravel/sail --dev
php artisan sail:install --devcontainer
./vendor/bin/sail up
```
The project will be available on PHP 8.1.1 Development Server (http://0.0.0.0:80)


Database needs to be moved from the previous version, that is why part of schema is provided in database/migrations/README.md.
Run:
```
./vendor/bin/sail artisan migrate
```
Then connect to DB and run the SQL from database/migrations/README.md.
