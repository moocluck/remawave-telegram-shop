FROM php:8.2-fpm

# Устанавливаем зависимости, необходимые для Symfony
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    wget \
    && docker-php-ext-install zip

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Копируем файлы проекта
COPY ../app /var/www/html

# Устанавливаем права
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Открываем порт для PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
