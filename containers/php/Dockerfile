FROM php:7.4-fpm

RUN apt-get -qq update && apt-get install -y \
    git \
    cpp \
    libicu-dev \
    zip \
    libzip-dev \
    libpng-dev \
    libxml2-dev \
    libonig-dev \
    rsyslog \
    wget \
    curl \
    libjpeg-dev \
    nano

RUN docker-php-ext-configure intl

RUN docker-php-ext-install \
    intl \
    mbstring \
    mysqli \
    zip \
    pdo \
    pdo_mysql \
    exif \
    soap \
    gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/green.localhost
