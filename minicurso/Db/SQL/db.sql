CREATE TABLE `phpconf`.`user_table` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `display_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

insert into user_table (username, password, name, display_name) values("maykon", md5("maykon"), "Maykon Ricardo Meier", "Maykon");

