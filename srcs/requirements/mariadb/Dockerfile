FROM alpine:3.20.2

RUN apk update

RUN apk add mariadb mariadb-client

RUN mariadb-install-db --user=mysql --datadir=/var/lib/mysql

RUN mkdir -p /run/mysqld
	
RUN chown mysql:mysql /run/mysqld
RUN chown -R mysql:mysql /var/lib/mysql

COPY setup.sh .

EXPOSE 3306

ENTRYPOINT ["sh", "/setup.sh"]