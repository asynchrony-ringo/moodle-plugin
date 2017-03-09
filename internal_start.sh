#!/bin/bash

chmod 770 var/moodledata
chown www-data:www-data /var/www/html/config.php
# chown -R www-data:www-data /var/www/html/mod/spark_module

/etc/init.d/cron start

# Run something to keep docker container running
source /etc/apache2/envvars
tail -F /var/log/apache2/* &
exec apache2 -D FOREGROUND
