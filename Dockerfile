FROM ubuntu:18.04

# Install app
RUN apt-get update 
RUN apt-get install apache2 -y --no-install-recommends
RUN apt-get autoremove -y && apt-get autoclean -y
RUN rm -rf /var/www/*
ADD src /var/www/html

# Configure apache
RUN chown -R www-data:www-data /var/www/html

ENV APACHE_RUN_DIR /var/www/html
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /tmp
ENV APACHE_PID_FILE 1.pid

EXPOSE 80
CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]