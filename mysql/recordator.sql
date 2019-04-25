DROP DATABASE IF exists recordator;

CREATE DATABASE recordator;

USE recordator;


CREATE TABLE `usuarios` (

email varchar (50),
nombre varchar (50),
 PRIMARY KEY (`email`)
) ;
