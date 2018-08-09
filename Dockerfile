FROM php:7.2-apache

RUN apt-get update -q -y \
    && apt-get install -q -y --no-install-recommends \
        ca-certificates \
	git

COPY . /var/www/html

WORKDIR /var/www/html

# Install Deps
RUN php composer.phar install
