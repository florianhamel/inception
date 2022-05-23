FROM	debian:buster

RUN		mkdir -p /inception/conf && mkdir -p /inception/tools

COPY	./conf/* /inception/conf

COPY	./tools/* /inception/tools

RUN		apt update && apt install -y \
		php7.3-fpm \
		php7.3-mysql

RUN		mkdir -p /var/www/html/wordpress && \
		mkdir -p /run/php && \
		chown www-data:www-data /var/www/html

RUN		cp /inception/conf/www.conf /etc/php/7.3/fpm/pool.d

EXPOSE	9000

ENTRYPOINT	/bin/sh /inception/tools/docker-entrypoint.sh