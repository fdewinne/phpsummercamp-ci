DROP TABLE `post` IF EXISTS;

CREATE TABLE `post` (
`id` INT NOT NULL ,
`title` VARCHAR( 50 ) NOT NULL ,
`intro` TEXT NULL ,
`body` TEXT NOT NULL ,
`image` VARCHAR( 200 ) NULL ,
`published_at` DATETIME NOT NULL
) ENGINE = INNODB;