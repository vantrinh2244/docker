FROM php:7.4-fpm

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update \
    && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip
# install protobuf
RUN cd /tmp && curl -OL https://github.com/google/protobuf/releases/download/v3.2.0/protoc-3.2.0-linux-x86_64.zip \
            && unzip protoc-3.2.0-linux-x86_64.zip -d protoc3 \
            && mv protoc3/bin/* /usr/local/bin/ \
            && mv protoc3/include/* /usr/local/include/

RUN pecl install grpc

RUN pecl install protobuf

# enable php extension
RUN docker-php-ext-enable grpc && \
    docker-php-ext-enable protobuf

RUN docker-php-ext-install sockets && \
    docker-php-ext-enable sockets
