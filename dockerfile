FROM php:8.2-cli

# 1. Instalar dependencias y Node.js
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev \
    && curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo pdo_mysql mbstring

WORKDIR /app

# 2. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 3. Instalar NPM y compilar Assets
COPY package.json package-lock.json* ./
RUN npm install

# 4. Copiar proyecto
COPY . .
RUN npm run build

# 5. CONFIGURACIÓN CRÍTICA: Crear el archivo de certificado SSL para TiDB
# Esto toma el contenido de tu variable y lo guarda en un archivo real
RUN mkdir -p /app/certs
RUN echo "$DB_SSL_CA_CONTENT" > /app/certs/ca.pem

# 6. Permisos
RUN mkdir -p storage/framework/cache/data \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p storage/logs \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && touch .env

EXPOSE 8080

# 7. Arranque optimizado
CMD php artisan config:clear && php artisan view:clear && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}