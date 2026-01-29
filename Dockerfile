FROM php:8.2-apache

# Installer PostgreSQL pour PHP
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_pgsql pgsql

# Copier le code source dans le conteneur
COPY . /var/www/html/

# Changer les droits
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
