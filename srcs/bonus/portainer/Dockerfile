FROM alpine:3.20.2

RUN apk update && apk add --no-cache curl ca-certificates \
    tzdata openssl

RUN update-ca-certificates

COPY setup.sh .
RUN chmod +x setup.sh

EXPOSE 8000 9443

ENTRYPOINT ["sh", "setup.sh"]