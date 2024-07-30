FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip \
    libicu-dev \
    libpq-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql intl

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./xdebug.ini "${PHP_INI_DIR}/conf.d"

#COPY --chown=www-data:www-data . /var/www/

WORKDIR /var/www/

EXPOSE 9000
CMD ["php-fpm"]

#EXPOSE 8000
#CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
