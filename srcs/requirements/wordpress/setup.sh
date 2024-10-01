#!/bin/sh

echo -e "\e[31m[wordpress:setup.sh] Script Start!\e[0m"
until mysqladmin ping -h"mariadb" -P"3306" --silent; do
    echo -e "\e[31m[wordpress:setup.sh] Waiting for mariadb... As usual...\e[0m"
    sleep 1
done


if ! wp core is-installed --allow-root 2> /dev/null; then
    echo -e "\e[31m[wordpress:setup.sh] WP not installed. Installing now...\e[0m"
    wp core download --allow-root
	sleep 3
    wp config create --allow-root --dbname="$MYSQL_DATABASE" --dbuser="$MYSQL_USER" --dbpass="$MYSQL_USER_PASSWORD" --dbhost="$WP_DB_HOST"
    wp core install --allow-root --url="$DOMAIN_NAME" --title="$WP_SITE_TITLE" \
        --admin_user="$WP_ADMIN_USR" --admin_password="$WP_ADMIN_PSWD" \
        --admin_email="$WP_ADMIN_EMAIL" --skip-email
	wp plugin install redis-cache --activate --allow-root
	echo "define('WP_CACHE', true);" >> /var/www/html/wp-config.php
    echo "define('WP_REDIS_HOST', 'redis');" >> /var/www/html/wp-config.php
    echo "define('WP_REDIS_PORT', 6379);" >> /var/www/html/wp-config.php
	wp user create --allow-root "$WP_USER" "$WP_USER_EMAIL" --user_pass="$WP_USER_PSWD"

else
    echo -e "\e[31m[wordpress:setup.sh] WP already installed. Running...\e[0m"
fi

exec php-fpm83 --nodaemonize