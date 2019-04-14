FROM ulsmith/alpine-apache-php7

ADD . /app

RUN cd /app \
    && composer install