FROM php:apache
SHELL ["/bin/bash", "-c"]
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
#RUN ln -s ../mods-available/{expires,headers,rewrite}.load /etc/apache2/mods-enabled/
#RUN sed -e '/<Directory \/var\/www\/>/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' -i /etc/apache2/apache2.conf
COPY php.ini /usr/local/etc/php/
#RUN sed -i "s/short_open_tag = .*/short_open_tag = On/" /usr/local/etc/php/php.ini