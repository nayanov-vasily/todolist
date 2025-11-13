FROM yiisoftware/yii2-php:8.4-fpm-nginx
RUN apt-get update
RUN apt-get install -y libssl-dev zlib1g-dev libmemcached-dev && \
    pecl install memcached-3.4.0 && \
    docker-php-ext-enable memcached