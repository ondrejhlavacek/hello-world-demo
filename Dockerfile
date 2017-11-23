FROM php:7.1-cli

WORKDIR /code

RUN apt-get update && apt-get install -y git unzip

RUN curl -sS https://getcomposer.org/installer | php \
  && mv /code/composer.phar /usr/local/bin/composer

COPY . /code

RUN composer install

ENTRYPOINT ["php", "./cli.php"]
