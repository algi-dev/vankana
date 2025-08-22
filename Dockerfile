# Dockerfile
FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    curl

# Enable Apache mods
RUN a2enmod rewrite

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Copy all files
COPY . .

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Generate Laravel key (akan diganti nanti)
RUN cp .env.example .env
RUN php artisan key:generate

# Clear cache
RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

# Expose port
EXPOSE 80

# Start Apache
CMD ["apachectl", "-D", "FOREGROUND"]
