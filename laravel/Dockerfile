FROM php:8.1-fpm AS dev

WORKDIR /var/www/laravel

# copy from current folder into /var/www/laravel
COPY ./ ./

# Install Laravel required libraries
RUN apt-get update
RUN apt-get install zip wget git zlib1g-dev -y
RUN docker-php-ext-install pdo_mysql

# Composer
RUN wget https://getcomposer.org/composer.phar -O ./composer
RUN chmod +x composer && mv composer /usr/local/bin/composer
RUN composer install


FROM composer:2.6.5 as build
COPY . /app/
RUN composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction

FROM php:8.1-apache-buster as production

ENV APP_ENV=production
ENV APP_DEBUG=false

RUN docker-php-ext-configure opcache --enable-opcache && \
    docker-php-ext-install pdo pdo_mysql
COPY build/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

COPY --from=build /app /var/www/html
COPY build/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .env.prod /var/www/html/.env

RUN php artisan config:cache && \
    php artisan route:cache && \
    chmod 777 -R /var/www/html/storage/ && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite
