#!/bin/bash
cd /var/www/html

while [ ! -f /usr/local/etc/phpsummercamp/phpsummercamp.ini ]
do
  sleep 2
done

bin/phing -propertyfile /usr/local/etc/phpsummercamp/phpsummercamp.ini integrate-database 2>&1 >> /var/log/phpsummercamp/install.log
chown -R apache:apache /var/www/html/*