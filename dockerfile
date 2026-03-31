FROM php:8.2-cli

# 1. Instalar dependencias del sistema necesarias
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring

# 2. Directorio de trabajo
WORKDIR /app

# 3. Copiar solo los archivos necesarios primero (para aprovechar el cache)
COPY composer.json composer.lock ./

# 4. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 5. Copiar el resto del proyecto (EXCEPTO el .env)
COPY . .

# 6. Permisos de carpetas (Vital para Laravel)
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# 7. Render asigna un puerto dinámico, usamos la variable $PORT
EXPOSE 8080

# 8. Comando de inicio profesional para Docker en la nube
CMD php artisan config:clear && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}