CREATE DATABASE alumno;

CREATE TABLE `colegio`.`alumno` (`id` INT NOT NULL AUTO_INCREMENT , `tipodocumento` VARCHAR(20) NOT NULL , `documento` VARCHAR(20) NOT NULL , `nombres` VARCHAR(50) NOT NULL , `apellidos` VARCHAR(50) NOT NULL , `fechanacimiento` DATE NOT NULL , `grado` VARCHAR(2) NOT NULL , `acudiente` VARCHAR(50) NOT NULL , `telacu` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



