FROM php:8.2-apache

# Expose HTTP port
EXPOSE 80

# Copy the web application files into the container
COPY . /var/www/html/
