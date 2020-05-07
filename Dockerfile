FROM php:7.2-apache
RUN a2enmod rewrite

ARG USER_ID
ARG GROUP_ID

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
    sudo \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html

RUN addgroup --gid $GROUP_ID user
RUN adduser --disabled-password --gecos '' --uid $USER_ID --gid $GROUP_ID user
RUN adduser user sudo

RUN echo "user ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers

USER user