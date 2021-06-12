FROM php:8.0.7-apache

WORKDIR /

COPY . /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN docker-php-ext-enable mysqli

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]