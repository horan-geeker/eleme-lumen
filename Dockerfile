# 采用Nginx稳定版本
FROM nginx:stable-alpine

# 设置好系统时区为东八区
RUN apk update && apk add tzdata \
    && cp /usr/share/zoneinfo/Asia/Chongqing /etc/localtime \
    && apk del tzdata

# 安装系统运行需要的软件，可根据实际情况增删
RUN apk update \
    && apk add bash \
    wget curl autoconf vim gcc g++ openssl-dev

# 安装PHP及常用扩展，可根据实际情况增删
RUN apk add php7-fpm \
    php7-common \
    php7-dev \
    php7-xdebug \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqlnd \
    php7-mysqli \
    php7-mcrypt \
    php7-mbstring \
    php7-ctype \
    php7-zlib \
    php7-gd \
    php7-exif \
    php7-intl \
    php7-sqlite3 \
    php7-pdo_pgsql \
    php7-pgsql \
    php7-xml \
    php7-xsl \
    php7-curl \
    php7-openssl \
    php7-iconv \
    php7-json \
    php7-phar \
    php7-soap \
    php7-dom \
    php7-zip \
    php7-session \
    php7-imap \
    php7-opcache \
    php7-pear \
    php7-sockets \
    php7-pcntl \
    php7-posix \
    php7-sysvmsg \
    php7-sysvshm \
    php7-sysvsem \
    php7-tokenizer

ADD php.ini /etc/php7/php.ini
ADD nginx.conf /etc/nginx/nginx.conf

ADD / /var/www/html

RUN chmod 777 /var/www/html/start.sh
RUN chmod 777 -R /var/www/html/bootstrap/cache
RUN chmod 777 -R /var/www/html/storage

EXPOSE 80

CMD ["/var/www/html/start.sh"]