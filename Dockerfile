FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx
RUN rm -rf /usr/share/nginx/html
COPY . /usr/share/nginx
RUN chmod -R 777 /usr/share/nginx/storage/*
RUN chmod -R 777 /usr/share/nginx/bootstrap
RUN composer install
RUN php artisan key:generate
RUN ln -s public html