#!/bin/bash

# Install missing PHP extensions
apk add --no-cache icu-dev zlib-dev libzip-dev
docker-php-ext-install intl zip

# Continue with Laravel stuff
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Laravel app
php artisan serve --host=0.0.0.0 --port=8000
