FROM php:7.2-apache
RUN a2enmod rewrite

ADD https://github.com/bcit-ci/CodeIgniter/archive/3.1.11.zip /var/www/html/ci.zip

RUN  apt-get update -y && \
     apt-get upgrade -y && \
     apt-get dist-upgrade -y && \
     apt-get -y autoremove && \
     apt-get clean

RUN apt-get install -y p7zip \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*


RUN unzip /var/www/html/ci.zip
RUN mv /var/www/html/CodeIgniter-3.1.11/system/ /var/www/html/
RUN rm -rf /var/www/html/CodeIgniter*
RUN rm ci.zip

COPY . /var/www/html