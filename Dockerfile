FROM php:7.2-apache

RUN apt-get update -q -y \
    && apt-get install -q -y --no-install-recommends \
        ca-certificates \
	git

COPY . /var/www/html
COPY ./etc/apache2.conf /etc/apache2/apache2.conf

#  Configuring Apache
RUN  rm /etc/apache2/sites-available/000-default.conf

# Enable rewrite module
RUN a2enmod rewrite

# Enable rewrite module
RUN a2enmod rewrite

WORKDIR /var/www/html

# Configure directory permissions for the web server
RUN chmod 777 /var/www/html/storage -R

# Install Deps
RUN php composer.phar install

RUN docker-php-ext-install pdo pdo_mysql