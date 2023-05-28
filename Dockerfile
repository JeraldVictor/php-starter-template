FROM php:apache
SHELL ["/bin/bash", "-c"]
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini 
RUN sed -i "s/short_open_tag = .*/short_open_tag = On/" /usr/local/etc/php/php.ini
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
# RUN apt-get update && apt-get install -y \
#     git \
#     zip \
#     curl \
#     sudo \
#     unzip \
#     libzip-dev \
#     libicu-dev \
#     libbz2-dev \
#     libpng-dev \
#     libjpeg-dev \
#     libmcrypt-dev \
#     libreadline-dev \
#     libfreetype6-dev \
#     g++
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
