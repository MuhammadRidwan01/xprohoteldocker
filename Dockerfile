FROM php:8.2-apache

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

COPY apache.conf /etc/apache2/conf-enabled/custom.conf