FROM php:7-fpm

RUN apt-get update && apt-get install -y curl git

RUN apt-get update && apt-get install -y zlib1g-dev libzip-dev libmagickwand-dev \
  && pecl install imagick \
  && docker-php-ext-install -j$(nproc) zip \
  && docker-php-ext-install -j$(nproc) mysqli \
  && docker-php-ext-enable imagick \
  && apt-get clean && rm -r /var/lib/apt/*

RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

COPY composer.* /app/
WORKDIR /app

ENV PATH="~/.composer/vendor/bin:./vendor/bin:${PATH}"
