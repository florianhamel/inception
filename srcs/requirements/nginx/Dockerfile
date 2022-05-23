FROM	debian:buster

RUN		mkdir -p /inception/conf && mkdir -p /inception/tools

COPY	./conf/* /inception/conf

COPY	./tools/* /inception/tools

RUN		apt update && apt install -y \
		nginx \
		openssl

RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-keyout /etc/ssl/private/inception.key \
			-out /etc/ssl/certs/inception.crt \
			-subj "/C=FR/ST=Ile-de-France/L=Neuilly-Plaisance/O=inception_O/OU=inception_OU/CN=inception_CN"

RUN 	chown www-data:www-data /var/www/html

RUN		cp /inception/conf/ssl.conf /etc/nginx/snippets && \
		cp /inception/conf/fhamel.conf /etc/nginx/sites-available && \
		cp /inception/tools/mypage.html /var/www/html && \
		cp /inception/tools/index.php /var/www/html && \
		ln -s /etc/nginx/sites-available/fhamel.conf /etc/nginx/sites-enabled && \
		rm /var/www/html/index.nginx-debian.html

ENTRYPOINT	/bin/sh /inception/tools/docker-entrypoint.sh
