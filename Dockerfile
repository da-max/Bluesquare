FROM composer:2

LABEL authors="Maxime Ben Hassen <maxime.benhassen@tutanota.com>"

WORKDIR /usr/src/app

RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql && apk update && apk add nodejs npm

COPY . ./

RUN composer install && npm install
