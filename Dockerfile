# Utiliser une image PHP officielle avec Apache
FROM php:7.4-apache

# Installer des dépendances nécessaires pour Laravel
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd zip pdo pdo_mysql && \
    a2enmod rewrite

# Copier le fichier de votre application dans le container
COPY . /var/www/html

# Changer les permissions sur le dossier de l'application
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 (port par défaut pour Apache)
EXPOSE 80
