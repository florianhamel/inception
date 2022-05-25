FROM	debian:buster

RUN		mkdir -p /inception/tools && mkdir -p /inception/conf

COPY	./conf/* /inception/conf/
COPY	./tools/* /inception/tools/

RUN		apt update && apt install -y \
		mariadb-server

RUN		cp /inception/conf/my.cnf /etc/mysql/

EXPOSE	3306

ENTRYPOINT	/bin/sh /inception/tools/docker-entrypoint.sh