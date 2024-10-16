# Step 1: Use an official PHP runtime as the base image
FROM php:8.1-fpm

# Step 2: Set the working directory
WORKDIR /var/www

# Step 3: Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    vim \
    unzip \
    git \
    curl \
    supervisor && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Step 4: Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_mysql gd

# Step 5: Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 6: Install Node.js and npm for frontend assets
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Verify Node.js and npm installation
RUN node -v && npm -v

# Step 7: Copy package.json and install Node dependencies separately for caching
COPY package*.json /var/www/
RUN npm install && npm run dev

# Step 8: Copy existing application directory contents
COPY . /var/www

# Step 9: Ensure permissions for PHP-FPM (optional)
RUN chown -R www-data:www-data /var/www && \
    chmod -R 775 /var/www/storage

# Step 10: Expose the PHP-FPM port
EXPOSE 9000

# Step 11: Start the PHP-FPM server
CMD ["php-fpm"]



