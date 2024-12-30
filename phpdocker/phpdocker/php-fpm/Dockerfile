FROM phpdockerio/php:8.4-fpm
WORKDIR "/application"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        git \
        php8.4-ast \
        php8.4-bcmath \
        php8.4-bz2 \
        php8.4-cgi \
        php8.4-http \
        php8.4-intl \
        php8.4-memcache \
        php8.4-memcached \
        php8.4-mysql \
        php8.4-odbc \
        php8.4-pgsql \
        php8.4-pq \
        php8.4-pspell \
        php8.4-psr \
        php8.4-redis \
        php8.4-uuid \
        php8.4-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
