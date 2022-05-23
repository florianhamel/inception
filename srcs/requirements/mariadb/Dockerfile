FROM	debian:buster

RUN		mkdir -p /inception/tools

COPY	./tools/* /inception/tools

RUN		apt update && apt install -y \
		mariadb-server

EXPOSE	3306

ENTRYPOINT	/bin/sh /inception/tools/docker-entrypoint.sh