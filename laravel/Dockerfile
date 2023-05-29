FROM php:8.1-fpm

WORKDIR /var/www/laravel

RUN mkdir /var/www/laravel -p

COPY ./ /var/www/laravel

WORKDIR /var/www/laravel

RUN apt-get update
RUN apt-get install zip wget git zlib1g-dev -y
RUN docker-php-ext-install pdo_mysql

# Composer
RUN wget https://getcomposer.org/composer.phar -O ./composer
RUN chmod +x composer && mv composer /usr/local/bin/composer
RUN composer install
