FROM php:7.3.11-fpm

RUN apt-get update

RUN apt-get install -y git libzip-dev && docker-php-ext-install zip

RUN curl https://getcomposer.org/composer.phar --output /usr/bin/composer
RUN chmod +x /usr/bin/composer

WORKDIR /app

COPY entrypoint.sh /usr/bin/entrypoint.sh
ENTRYPOINT [ "sh", "/usr/bin/entrypoint.sh"]
