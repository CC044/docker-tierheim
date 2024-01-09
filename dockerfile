FROM php:8.0-apache
WORKDIR /var/www/html

COPY index.php index.php
COPY . /
COPY ./* /
COPY css/ /css/
COPY doc/ /doc/
COPY img/ /img/
COPY lib/ /lib/
COPY scripts/ /scripts/
# COPY src/ src
RUN ls -la /var/www/html/*
EXPOSE 80
