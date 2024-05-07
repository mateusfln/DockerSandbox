FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql

# Defina o diretório de trabalho padrão dentro do container
WORKDIR /www

# Exponha a porta 9000 para comunicação com o servidor web ou outro container
EXPOSE 9000
