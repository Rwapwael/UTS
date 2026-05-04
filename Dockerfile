FROM php:8.2-apache

# Install PHP extensions required by CodeIgniter 4
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        intl \
        mbstring \
        pdo \
        pdo_mysql \
        mysqli \
        zip \
        gd \
        opcache \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set document root to public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Set permissions for writable directory
RUN chown -R www-data:www-data /var/www/html/writable \
    && chmod -R 755 /var/www/html/writable

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Configure PHP for production
RUN echo "max_execution_time = 300" >> /usr/local/etc/php/conf.d/custom.ini \
    && echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/custom.ini

EXPOSE 80

# Use Apache default CMD
CMD ["apache2-foreground"]
