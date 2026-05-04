FROM dunglas/frankenphp:php8.2-bookworm

# Install system dependencies and PHP intl extension
RUN apt-get update && apt-get install -y \
    libicu-dev \
    git \
    unzip \
    && docker-php-ext-install intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --optimize-autoloader --no-scripts --no-interaction --no-dev

# Copy application code
COPY . .

# Create Caddyfile for FrankenPHP
RUN printf '{\n\tauto_https off\n\tadmin off\n}\n\n:${PORT} {\n\troot * /app/public\n\tphp_server\n}' > /etc/caddy/Caddyfile

EXPOSE ${PORT:-8080}

CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]
