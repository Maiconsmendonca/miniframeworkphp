FROM phpdockerio/php:8.2-fpm
WORKDIR "/app"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        git \ 
        php8.2-http \ 
        php8.2-mcrypt \ 
        php8.2-memcache \ 
        php8.2-memcached \ 
        php8.2-mysql \ 
        php8.2-oauth \ 
        php8.2-odbc \ 
        php8.2-xdebug \ 
        php8.2-xsl \ 
        php8.2-yaml \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
