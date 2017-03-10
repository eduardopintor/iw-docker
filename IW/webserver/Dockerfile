# Base image
FROM ubuntu:12.04
MAINTAINER Fabrica HITSS

VOLUME ["/var/www"]

RUN apt-get update && \
    apt-get install -y \
    iputils-ping \
	apache2 \
	php5 \
	php5-cli \
	libapache2-mod-php5 \
	php5-gd \
	php5-ldap \
	php5-mysql \
	php5-pgsql \
	mysql-client

# Vhosts custom configurations 
COPY default.conf /etc/apache2/sites-available/default
COPY iemen.claro.conf /etc/apache2/sites-available/iemen.claro

# PHP ini customs
COPY php.ini /etc/php5/apache2/php.ini
COPY php.ini /etc/php5/cli/php.ini

# Enable apache modrewrite
RUN a2enmod rewrite
RUN a2ensite iemen.claro

# Ports exposes
EXPOSE 80
EXPOSE 443

# Cleaner temp files
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

CMD ["/usr/sbin/apache2ctl", "-D FOREGROUND"]
