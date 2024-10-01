FROM alpine:3.20.2

RUN apk add --no-cache redis

EXPOSE 6379

CMD ["redis-server", "--protected-mode", "yes"]
