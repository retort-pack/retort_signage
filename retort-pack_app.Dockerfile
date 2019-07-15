FROM fedora:latest
RUN dnf -y update
RUN dnf -y install zip unzip php php-openssl php-json php-zip php-mbstring php-dom
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN composer global require laravel/installer
ADD . /var/www/html
WORKDIR /var/www/html
CMD ["/usr/sbin/httpd","-DFOREGROUND"]
