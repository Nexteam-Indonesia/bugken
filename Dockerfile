FROM alpine:3.14

RUN echo "Update System"

RUN apk update

RUN echo "Installing common dependency"

RUN apk add --no-cache zip \
    unzip \
    curl \
    supervisor \
    nginx 


RUN apk add --no-cache php8 \
    php8-ctype \
    php8-curl \
    php8-dom \
    php8-fpm  \
    php8-fileinfo \
    php8-gd \
    php8-intl \
    php8-json \
    php8-mbstring \
    php8-mysqli \
    php8-opcache \
    php8-openssl \
    php8-phar \
    php8-pdo_mysql \
    php8-tokenizer \
    php8-session \
    php8-xml \
    php8-xmlwriter \
    php8-xmlreader \
    php8-zlib 

RUN echo "Create Sysmlink PHP"

RUN ln -s /usr/bin/php8 /usr/bin/php

RUN echo "Preparing Workdir"

RUN mkdir -p /var/www/html

WORKDIR /var/www/html


RUN echo "Copy File"

COPY ./server/nginx.conf /etc/nginx/nginx.conf
COPY index.php /var/www/html/index.php
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY .env.example /var/www/html/.env
COPY . /var/www/html
COPY ./server/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN composer install

RUN find /var/www -type f -exec chmod 777 {} \;

RUN find /var/www -type d -exec chmod 777 {} \;

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

EXPOSE 80