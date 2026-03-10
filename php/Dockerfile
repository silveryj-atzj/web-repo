FROM php:8.2-fpm

# 安装系统依赖并启用 PHP 扩展 (mysqli 为学校教程常用, pdo_mysql 为现代开发常用)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli pdo_mysql