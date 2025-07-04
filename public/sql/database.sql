CREATE DATABASE IF NOT EXISTS `demo3`
	CHARACTER SET utf8mb4
	COLLATE utf8mb4_unicode_ci;

CREATE OR REPLACE TABLE `orders`
(
	`id`          INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT,
	`user_id`     INTEGER UNSIGNED  NOT NULL,
	`product_id`  INTEGER UNSIGNED  NOT NULL,
	`qty`         SMALLINT UNSIGNED NOT NULL,
	`insert_date` DATETIME          NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users`
(
	`id`          INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nickname`    VARCHAR(255)     NOT NULL UNIQUE,
	`usernm`      VARCHAR(255)     NOT NULL UNIQUE COMMENT 'E-Mail',
	`passwd`      VARCHAR(255)     NOT NULL COMMENT 'SHA1',
	`insert_date` DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	`stato`       TINYINT(4)       NOT NULL DEFAULT 1 COMMENT '0 = Disattivato, 1 = Attivato',
	PRIMARY KEY (`id`)
);

CREATE OR REPLACE TABLE `users_access`
(
	`user_id`             INTEGER UNSIGNED NOT NULL,
	`ip_address`          VARCHAR(20),
	`user_agent`          VARCHAR(255)     NOT NULL,
	`data_ultimo_accesso` DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`user_id`)
);

CREATE OR REPLACE TABLE `products`
(
	`id`          INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	`description` VARCHAR(255)     NOT NULL,
	`price`       DECIMAL          NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `orders`
	ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
		ON UPDATE NO ACTION ON DELETE RESTRICT;

ALTER TABLE `users_access`
	ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
		ON UPDATE NO ACTION ON DELETE CASCADE;

ALTER TABLE `orders`
	ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
		ON UPDATE NO ACTION ON DELETE RESTRICT;

ALTER TABLE `users`
	ADD `update_date` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
		AFTER `insert_date`;
