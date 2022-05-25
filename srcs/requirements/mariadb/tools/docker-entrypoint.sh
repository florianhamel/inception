#!/bin/sh

/etc/init.d/mysql start
echo "CREATE DATABASE IF NOT EXISTS ${WP_DB_NAME}" | mysql -u root -proot
echo "CREATE USER IF NOT EXISTS '${MYSQL_ADMIN_USER}'@'%' IDENTIFIED BY '${MYSQL_ADMIN_PASSWORD}'" | mysql -u root -proot
echo "GRANT ALL PRIVILEGES ON *.* TO '${MYSQL_ADMIN_USER}'@'%' IDENTIFIED BY '${MYSQL_ADMIN_PASSWORD}'" | mysql -u root -proot
echo "CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}'" | mysql -u root -proot
echo "GRANT ALL PRIVILEGES ON ${WP_DB_NAME}.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}'" | mysql -u root -proot
echo "FLUSH PRIVILEGES" | mysql -u root -proot
/etc/init.d/mysql stop
exec mysqld -u root --datadir="/var/lib/mysql"