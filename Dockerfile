# Stage 1: Build environment
FROM php:8.1-fpm as builder

# Install system dependencies
RUN apt-get update \
    && apt-get install -y \
        curl \
        git \
        libpq-dev \
        libzip-dev \
        libbz2-dev \
        libonig-dev \
        libicu-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
        libssl-dev \
        zip \
        unzip \
        postgresql-client

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql \
    exif \
    pcntl \
    bcmath \
    ctype \
    iconv \
    xml \
    mbstring \
    tokenizer \
    bz2

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install project dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --optimize-autoloader --no-dev

# Stage 2: Production image
FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/html

# Copy project files from the builder stage
COPY --from=builder /var/www/html /var/www/html

# Set file and directory permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
