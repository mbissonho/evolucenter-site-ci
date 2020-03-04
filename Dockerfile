FROM php:7.2-apache
RUN a2enmod rewrite

WORKDIR /var/www/html

RUN  apt-get update -y && \
     apt-get upgrade -y && \
     apt-get dist-upgrade -y && \
     apt-get -y autoremove && \
     apt-get clean

RUN apt-get install -y p7zip \
    zip \
    unzip \
    wget \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html