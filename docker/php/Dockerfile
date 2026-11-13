FROM docker.io/library/php:8.3-fpm-alpine

COPY --from=docker.io/library/composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

RUN apk add --no-cache \
        zlib \
        libzip \
        libpng \
        libjpeg-turbo \
        postgresql-libs \
    && apk add --no-cache --virtual .build-deps \
        zlib-dev \
        libzip-dev \
        libpng-dev \
        libjpeg-turbo-dev \
        postgresql-dev \
        linux-headers \
        $PHPIZE_DEPS \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        opcache \
        zip \
        gd \
        bcmath \
        pgsql \
        pdo_pgsql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del .build-deps

RUN { \
      echo 'memory_limit = -1'; \
      echo 'upload_max_filesize = 512M'; \
      echo 'post_max_size = 512M'; \
      echo 'max_file_uploads = 20'; \
    } > /usr/local/etc/php/conf.d/mealplanner.ini

RUN { \
      echo 'xdebug.mode = develop,debug'; \
      echo 'xdebug.start_with_request = yes'; \
      echo 'xdebug.client_host = host.docker.internal'; \
      echo 'xdebug.client_port = 9003'; \
      echo 'xdebug.log = /tmp/xdebug.log'; \
      echo 'xdebug.log_level = 0'; \
    } > /usr/local/etc/php/conf.d/xdebug.ini

COPY . .
