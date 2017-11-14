FROM php:7.0-apache

COPY php.ini /usr/local/etc/php/
COPY conf.d/* /usr/local/etc/php/conf.d/
COPY composer.phar /usr/bin/composer
RUN chmod +x /usr/bin/composer

RUN apt-get update \
	&& apt-get install -y --no-install-recommends \
		libmcrypt4 libmcrypt-dev \
	&& rm -rf /var/lib/apt/lists/* \
	&& pecl install xdebug-2.5.3 \
	&& docker-php-ext-enable xdebug \
	&& docker-php-ext-install mysqli pdo_mysql \
	&& docker-php-ext-install mcrypt \
	&& apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false \
		libmcrypt-dev
