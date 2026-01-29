FROM php:8.2-apache

# Installer l'extension mysqli pour PHP
RUN docker-php-ext-install mysqli

# Copier l'application PHP dans le serveur Apache
COPY app/ /var/www/html/

# Exposer le port 80
EXPOSE 80

