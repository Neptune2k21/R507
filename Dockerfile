FROM php:8.2-cli


RUN apt-get update && apt-get install -y \
    git unzip zip libicu-dev libzip-dev libpq-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip gd opcache


COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/html


EXPOSE 8000


CMD ["bash", "-c", "composer install && php -S 0.0.0.0:8000 -t public"]
