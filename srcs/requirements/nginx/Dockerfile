FROM alpine:3.20.2

RUN apk update

RUN apk add --no-cache nginx openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/CN=localhost"

COPY nginx.conf /etc/nginx/http.d/default.conf

RUN mkdir -p /bonus/www/
COPY www/* /bonus/www/

EXPOSE 443
EXPOSE 8081
EXPOSE 666

ENTRYPOINT ["nginx", "-g", "daemon off;"]