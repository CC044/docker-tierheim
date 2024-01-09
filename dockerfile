FROM php:8.0-apache
WORKDIR /var/www/html

COPY index.php index.php
COPY . /var/www/html/
COPY ./* /var/www/html/
#COPY css/ /var/www/html//css/
#COPY doc/ /var/www/html//doc/
#COPY img/ /var/www/html//img/
#COPY lib/ /var/www/html//lib/
#COPY scripts/ /scripts/
EXPOSE 80
