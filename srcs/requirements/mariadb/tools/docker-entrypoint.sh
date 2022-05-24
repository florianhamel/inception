#!/bin/sh

/etc/init.d/mysql start
mysql -e "CREATE DATABASE IF NOT EXISTS ${WP_DB_NAME};"
mysql -e "CREATE USER ${MYSQL_USER}@'localhost' IDENTIFIED BY ${MYSQL_PASSWORD};"
mysql -e "GRANT ALL ON ${WP_DB_NAME}.* TO ${MYSQL_USER}@'localhost';"
mysql -e "FLUSH PRIVILEGES"
mysqld