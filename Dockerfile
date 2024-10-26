FROM php:8.1.1-apache

# Установка необходимых расширений, включая MySQLi
RUN docker-php-ext-install mysqli
