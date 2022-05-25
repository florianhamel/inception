FROM	debian:buster

RUN		mkdir -p /inception/conf && mkdir -p /inception/tools

COPY	./conf/* /inception/conf
COPY	./tools/* /inception/tools

RUN		apt update && apt install -y \
		php7.3-fpm \
		php7.3-mysql \
		tar

RUN		mkdir -p /var/www/html/wordpress && \
		mkdir -p /run/php && \
		chown www-data:www-data /var/www/html

ADD		https://fr.wordpress.org/wordpress-6.0-fr_FR.tar.gz /tmp

RUN		tar xzvf /tmp/wordpress-6.0-fr_FR.tar.gz && \
		mv wordpress/* /var/www/html/wordpress && \
		rm -rf wordpress

RUN		cp /inception/conf/www.conf /etc/php/7.3/fpm/pool.d && \
		cp /inception/conf/wp-config.php /var/www/html/wordpress

EXPOSE	9000

ENTRYPOINT	/bin/sh /inception/tools/docker-entrypoint.sh