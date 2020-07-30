#Dockerfile
FROM php:7.3.0-apache

RUN a2enmod rewrite
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && docker-php-ext-install pdo pdo_mysql

ADD ./DungeonMaster/ /var/www/html

EXPOSE 80
