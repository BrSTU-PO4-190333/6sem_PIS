CREATE TABLE `pis6_ab` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `surname` VARCHAR(16) NOT NULL ,
    `name` VARCHAR(16) NOT NULL ,
    `middlename` VARCHAR(16) NOT NULL ,
    UNIQUE `id` (`id`)
) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_general_ci; 
