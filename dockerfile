FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

EXPOSE 9000