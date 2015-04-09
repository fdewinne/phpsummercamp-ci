DROP DATABASE IF EXISTS `CIBlog_development`;

CREATE DATABASE IF NOT EXISTS `CIBlog_development`;

GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;

USE `CIBlog_development`;

CREATE TABLE  `post` (
`id` INT NOT NULL ,
`title` VARCHAR( 50 ) NOT NULL ,
`intro` TEXT NULL ,
`body` TEXT NOT NULL ,
`image` VARCHAR( 200 ) NULL ,
`published_at` DATETIME NOT NULL
) ENGINE = INNODB;
