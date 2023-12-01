FROM php:8.1-fpm

WORKDIR /var/www/overband

RUN apt-get update && apt-get install -y \
    curl \
    libpq-dev \
    libonig-dev \
    libzip-dev

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo  \
    pdo_mysql \
    mbstring \
    zip

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

ADD . /var/www

RUN chown -R www-data:www-data /var/www
# RUN chmod -R 755 /var/www/storage

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1

EXPOSE 9000

COPY ./docker/up.sh /tmp/up.sh
RUN chmod -R 755 /tmp/up.sh

CMD ["php-fpm"]
