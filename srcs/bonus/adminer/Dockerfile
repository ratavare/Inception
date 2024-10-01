FROM alpine:3.20.2

RUN apk update
RUN apk add --no-cache php-session php83 php83-fpm php83-mysqli curl

RUN mkdir -p /var/www/adminer

RUN curl -L https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php -o /var/www/adminer/index.php

RUN chown -R nobody:nogroup /var/www/adminer

EXPOSE 9000

COPY www.conf /etc/php83/php-fpm.d/www.conf

ENTRYPOINT ["php-fpm83", "--nodaemonize"]