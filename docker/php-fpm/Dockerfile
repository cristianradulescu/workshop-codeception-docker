FROM php:fpm

RUN apt-get update && apt-get install -y libcurl4-openssl-dev
RUN docker-php-ext-install curl

EXPOSE 8000
WORKDIR /app
CMD ["php", "-S", "0.0.0.0:8000", "-t", "/app", "/app/index.php"]