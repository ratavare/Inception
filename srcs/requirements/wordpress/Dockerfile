FROM alpine:3.20.2

RUN apk update

RUN apk add mariadb-client php83 php83-fpm \
	php83-mysqli php83-cgi php-phar php-mbstring \
	php-pdo php-gd fcgi mysql-client curl wget php-curl php-sockets

RUN adduser -S -G www-data www-data

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar ; \
	chmod +x wp-cli.phar ; mv wp-cli.phar /usr/local/bin/wp

COPY setup.sh .
RUN chmod +x setup.sh

COPY www.conf etc/php83/php-fpm.d/www.conf

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000

ENTRYPOINT ["sh", "/setup.sh"]