FROM php:8.2-apache

WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    default-mysql-client \
    curl \
    && rm -rf /var/lib/apt/lists/*

# Enable PHP extensions
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer files and install dependencies (skip scripts, artisan not copied yet)
COPY composer.json composer.lock* /var/www/html/
RUN composer install --optimize-autoloader --no-interaction --no-progress --no-scripts

# Install Node.js 18
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Copy npm files and install dependencies
COPY package.json package-lock.json* /var/www/html/
RUN npm install

# Copy code and build assets
COPY . /var/www/html/
RUN npm run build

# Laravel setup - create .env file directly
RUN printf "APP_NAME=Akawnt\nAPP_ENV=local\nAPP_KEY=base64:fPNwTbhBPFmqdmnoz5CuXWYdKSbyZ8TMK6M3HMerpWQ=\nAPP_DEBUG=true\nAPP_URL=http://localhost:8080\nLOG_CHANNEL=stack\nLOG_DEPRECATIONS_CHANNEL=null\nLOG_LEVEL=debug\nDB_CONNECTION=mysql\nDB_HOST=db\nDB_PORT=3306\nDB_DATABASE=akawnt\nDB_USERNAME=root\nDB_PASSWORD=root_password\nBROADCAST_DRIVER=log\nCACHE_DRIVER=file\nFILESYSTEM_DISK=local\nQUEUE_CONNECTION=sync\nSESSION_DRIVER=file\nSESSION_LIFETIME=120\nMAIL_MAILER=smtp\nMAIL_HOST=mailpit\nMAIL_PORT=1025\nMAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nMAIL_FROM_ADDRESS=hello@example.com\nMAIL_FROM_NAME=Akawnt\n" > .env
RUN chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Apache config
RUN a2enmod rewrite

# Configure Apache to allow .htaccess and serve public directory
RUN sed -i 's|DocumentRoot.*|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Copy and set entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose and run
EXPOSE 80
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]