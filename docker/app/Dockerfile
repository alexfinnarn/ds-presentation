FROM php:7.2

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update -y
RUN apt-get install --no-install-recommends -y libpng-dev zlib1g-dev git ca-certificates

RUN pecl install ds \
  && docker-php-ext-enable ds

RUN docker-php-ext-install gd
RUN docker-php-ext-install opcache
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install zip
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pcntl

# RUN echo 'opcache.memory_consumption=256' >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini
# RUN echo 'opcache.max_accelerated_files=20000' >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini

WORKDIR /var/www

EXPOSE 8000
