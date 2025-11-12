FROM php:8.0-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod mod_rewrite

WORKDIR /var/www/html