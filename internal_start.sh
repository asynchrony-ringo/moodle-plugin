#!/bin/bash
chmod 770 var/moodledata

printenv | sed 's/^\(.*\)$/export \1/g' | grep -E '^export POSTGRES' > /root/project_env.sh

/etc/init.d/cron start

# Run something to keep docker container running
source /etc/apache2/envvars
tail -F /var/log/apache2/* &
exec apache2 -D FOREGROUND
