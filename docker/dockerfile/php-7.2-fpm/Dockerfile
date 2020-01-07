From php:7.2-fpm

#维护者信息
MAINTAINER zhangdeTalk 2393222021@qq.com

#时区
ENV TZ Asia/Shanghai
RUN date -R

#RUN docker-php-ext-install bcmath dom fileinfo filter ftp gd gmp hash iconv imap json mbstring mysqli odbc opcache pdo pdo_mysql pdo_odbc phar reflection session snmp soap sockets zip
#RUN docker-php-ext-install mysqli opcache pdo_mysql
WORKDIR /working
RUN apt-get update --fix-missing && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev  \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include --with-jpeg-dir=/usr/include/jpeg \
    && docker-php-ext-install gd mysqli opcache pdo_mysql gd zip

ENV PHPREDIS_VERSION 4.0.1
ENV PHPXDEBUG_VERSION 2.6.0
ENV PHPSWOOLE_VERSION 4.2.13
ENV PHPMONGODB_VERSION 1.5.3
RUN pecl install redis-$PHPREDIS_VERSION \
    && pecl install xdebug-$PHPXDEBUG_VERSION \
    && pecl install swoole-$PHPSWOOLE_VERSION \
    && pecl install mongodb-$PHPMONGODB_VERSION \
    && docker-php-ext-enable redis xdebug swoole mongodb

# install composer new
# https://getcomposer.org/installer | https://install.phpcomposer.com/installer
 RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
     && php composer-setup.php \
     && php -r "unlink('composer-setup.php');" \
     && mv composer.phar /usr/local/bin/composer \
     && composer config -g repo.packagist composer https://packagist.laravel-china.org

RUN apt-get install -y git

# clear
RUN rm -rf /var/cache/apt/* \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir /var/lib/sessions \
    && chmod o=rwx -R /var/lib/sessions

#容器启动时执行指令
CMD ["php-fpm"]
