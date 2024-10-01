FROM alpine:3.20.2

RUN apk update && apk add --no-cache vsftpd

RUN adduser -D -h /home/vsftpd admin && echo "admin:password" | chpasswd

COPY vsftpd.conf /etc/vsftpd.conf
COPY run.sh .
RUN chmod +x run.sh

RUN mkdir -p /volume/files
RUN chmod 777 /volume/files

EXPOSE 21 21100-21110

ENTRYPOINT [ "sh", "/run.sh" ]