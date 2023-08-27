FROM php:7.4-fpm

RUN docker-php-ext-install pdo pdo_mysql opcache

COPY ./php/opcache.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www/html

EXPOSE 9000

CMD ["php-fpm"]