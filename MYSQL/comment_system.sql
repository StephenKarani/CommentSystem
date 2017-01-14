CREATE SCHEMA `comment_system` ;

CREATE TABLE `comment_system`.`subscribers` (
  `userId` INT(11) NOT NULL,
  `userName` VARCHAR(255) NOT NULL,
  `profile_img` VARCHAR(255) NULL,
  PRIMARY KEY (`userId`));

  CREATE TABLE `comment_system`.`comments` (
  `comment_id` INT(11) NOT NULL,
  `comment` TEXT(2000) NOT NULL,
  `userId` INT(11) NOT NULL,
  PRIMARY KEY (`comment_id`));