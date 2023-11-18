# Use the official PHP Apache image
FROM php:8.0-apache

# Enable PHP modules (e.g., for MySQL, PDO, and other common extensions)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Define an environment variable to specify the PHP file to run
ENV PHP_FILE_NAME=ejercicio_1.php

# Copy your PHP application files to the webserver's document root
COPY ./html /var/www/html/

# Start Apache and run PHP with the specified file
CMD ["sh", "-c", "sed -i 's/index\.php/$PHP_FILE_NAME/' /etc/apache2/sites-available/000-default.conf && apache2-foreground"]