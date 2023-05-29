CREATE DATABASE IF NOT EXISTS `laravel`;

CREATE USER 'laravel'@'localhost' IDENTIFIED BY 'secret';

GRANT ALL PRIVILEGES ON *.* TO 'laravel'@'localhost' WITH GRANT OPTION;

GRANT ALL ON `laravel`.* TO 'laravel'@'localhost';
