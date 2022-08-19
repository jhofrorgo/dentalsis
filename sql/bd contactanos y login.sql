CREATE TABLE `colegio`.`usuario` (`id` INT(10) NOT NULL AUTO_INCREMENT , `usuario` VARCHAR(50) NOT NULL , `contraseña` VARCHAR(50) NOT NULL , `estado` VARCHAR(2) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `usuario` ADD `correo` VARCHAR(50) NOT NULL AFTER `estado`;

ALTER TABLE `usuario` CHANGE `contraseña` `contrasena` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;


CREATE TABLE `colegio`.`contactenos` (`id` INT(10) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(100) NOT NULL , `correo` VARCHAR(100) NOT NULL , `telefono` VARCHAR(100) NOT NULL , `mensaje` VARCHAR(500) NOT NULL , `fecha` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;