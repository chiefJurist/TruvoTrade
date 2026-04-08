# 1. Base image
FROM php:8.2-fpm

# 2. Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    supervisor nano libzip-dev nginx

# 3. PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# 4. Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Workdir
WORKDIR /var/www/html

# 6. Copy app
COPY . .

# 7. Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# 8. Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 9. Copy Nginx config
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

# 10. Supervisor to manage php-fpm and nginx
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

CMD ["/usr/bin/supervisord"]