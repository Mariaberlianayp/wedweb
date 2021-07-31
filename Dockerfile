FROM php:8.0.7-apache

WORKDIR /

COPY . /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN docker-php-ext-enable mysqli

RUN a2enmod expires

RUN service apache2 restart 

RUN cat /var/www/html/config/mod_expires.conf >> /etc/apache2/sites-available/000-default.conf

RUN service apache2 restart

