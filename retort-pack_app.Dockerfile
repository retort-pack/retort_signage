FROM fedora:latest
RUN dnf -y update
RUN dnf -y install httpd php php-mbstring php-pear php-openssl php-json php-zip php-dom php-bcmath php-mysqlnd php-pdo
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN composer global require laravel/installer
ADD src /var/www/retort_signage
ADD httpd.conf /etc/httpd/conf/httpd.conf
RUN sed -i -e "s/DocumentRoot \"\/var\/www\/html\"/DocumentRoot \"\/var\/www\/retort_signage\"/g" /etc/httpd/conf/httpd.conf
WORKDIR /var/www/retort_signage
CMD ["/usr/sbin/httpd","-DFOREGROUND"]
