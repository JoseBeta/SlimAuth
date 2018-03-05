
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- client
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client`
(
    `id` BIGINT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100),
    `surname` VARCHAR(200),
    `email` VARCHAR(255),
    `tlf` VARCHAR(20),
    `adress` VARCHAR(255),
    `city` VARCHAR(255),
    `country_id` bigint(11) unsigned,
    `card_data` VARCHAR(255),
    `country_name` VARCHAR(80),
    `social_id` VARCHAR(100),
    `service` VARCHAR(20),
    `token` VARCHAR(255),
    PRIMARY KEY (`id`),
    INDEX `idx_country` (`country_id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
