FROM php:8.2-cli

# 1. Instalar dependencias del sistema y NODE.JS (para Vite/Quasar)
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev \
    && curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo pdo_mysql mbstring

WORKDIR /app

# 2. Instalar Composer (PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 3. Instalar NPM (JS) y compilar Assets (Vite)
COPY package.json package-lock.json* ./
RUN npm install

# 4. Copiar el resto del proyecto
COPY . .

# 5. Ejecutar el Build de Vite (Esto crea el manifest.json que falta)
RUN npm run build

# 6. Permisos para Laravel
RUN mkdir -p storage/framework/cache/data \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p storage/logs \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && touch .env

EXPOSE 8080

# 7. Limpiar caché antes de arrancar
CMD php artisan config:clear && php artisan view:clear && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}