FROM alpine:latest
RUN apk update
RUN apk add php php-bcmath php-ctype php-json php-mbstring php-openssl php-pdo php-tokenizer php-xml php-mysqlnd php-common php-pear php-phar php-zip nginx php-fpm
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN composer global require laravel/installer
RUN mkdir -p /run/php-fpm
ADD src /var/www/retort_signage
ADD nginx.conf /etc/nginx/nginx.conf
ADD php-fpm.conf /etc/php7/php-fpm.conf
ADD www.conf /etc/php7/php-fpm.d/www.conf
ADD startup.sh /startup.sh
RUN chmod +x /startup.sh
ENTRYPOINT ["/bin/sh","/startup.sh"]
WORKDIR /var/www/retort_signage

