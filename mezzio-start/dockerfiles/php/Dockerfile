FROM php:8.0-apache

RUN apt-get -y update
RUN apt-get install -y --no-install-recommends apt-utils

# instalando git, zip e unzip no sistema operacional
RUN apt-get -y install git libzip-dev unzip

# instalando php-ext-zip e composer (gerenciador de pacotes)
RUN docker-php-ext-install zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# alterando pasta pública de html para public
RUN sed -ri -e 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# habilitando mod_rewrite para reescrita de url
RUN a2enmod rewrite
