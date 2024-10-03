FROM alpine:3.20.2

RUN apk add --no-cache redis

RUN echo "vm.overcommit_memory = 1" >> /etc/sysctl.conf

COPY setup.sh .
RUN chmod +x setup.sh

EXPOSE 6379

CMD sysctl -w vm.overcommit_memory=1
ENTRYPOINT [ "sh", "setup.sh" ]
