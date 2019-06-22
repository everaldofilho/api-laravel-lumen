FROM php:7.3-apache
RUN cd /etc/apache2/mods-available/ \
    && a2enmod rewrite
COPY apache2/site.conf /etc/apache2/sites-enabled/000-default.conf