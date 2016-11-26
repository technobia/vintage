FROM php:7.0.13-apache
RUN apt-get update && apt-get -y install mysql-client && rm -rf /var/lib/apt/lists/*

COPY 000-default.conf /etc/apache2/sites-available/
COPY . /var/www/html

WORKDIR /var/www/html

RUN mv wp-config.php.tmpl wp-config.php

EXPOSE 80
