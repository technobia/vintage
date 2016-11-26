FROM php:7.0.13-apache

COPY 000-default.conf /etc/apache2/sites-available/
COPY . /var/www/html

EXPOSE 80
