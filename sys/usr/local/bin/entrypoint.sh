#!/bin/bash

cd /var/www/html

bin/console doctrine:database:create --if-not-exists --no-interaction
bin/console doctrine:migrations:migrate --no-interaction
chown -R www-data:www-data ./var/* ./public/*
find ./public -type d -exec chmod 755 {} \;

exec php-fpm