FROM ubuntu:16.04

RUN apt-get update && apt-get -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php

RUN apt-get update && \
		apt-get -y --allow-unauthenticated install mysql-client pwgen python-setuptools curl git unzip apache2 php7.1 \
		php7.1-gd libapache2-mod-php7.1 wget supervisor php7.1-pgsql curl libcurl3 \
		libcurl3-dev php7.1-curl php7.1-xml php7.1-xmlrpc php7.1-zip php7.1-intl php7.1-mysql git-core

RUN cd /tmp && \
	git clone https://github.com/moodle/moodle.git --depth=1 && \
	mv /tmp/moodle/* /var/www/html/ && \
	rm /var/www/html/index.html && \
	chown -R www-data:www-data /var/www/html

# Note: May remove this requirement as Nginx may be acting as our proxy
# Enable SSL, moodle requires it
RUN a2enmod ssl && a2ensite default-ssl

COPY moodle-cron /etc/cron.d/moodle-cron

RUN cron
