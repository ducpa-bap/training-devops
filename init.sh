#!/bin/sh

/usr/local/bin/composer install

./wait-for-it.sh mysql:3306

/usr/local/bin/php /var/www/html/artisan migrate

/usr/local/bin/php /var/www/html/artisan serve --host=0.0.0.0