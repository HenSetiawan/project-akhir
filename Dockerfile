FROM php:8.1-fpm

RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_mysql && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

WORKDIR /var/www/html

COPY --from=composer /usr/bin/composer /usr/bin/composer
