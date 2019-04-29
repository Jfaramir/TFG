DROP DATABASE IF exists recordator;

CREATE DATABASE recordator;

USE recordator;


CREATE TABLE `usuarios` (

email varchar (50),
nombre varchar (50),
 PRIMARY KEY (`email`)
) ;

CREATE TABLE `grupos` (
id int(10) auto_increment,
nombre Varchar(50),
foto varchar(20)

) ;

CREATE TABLE `grupos` (
id int(10) auto_increment,
nombre Varchar(50),
foto varchar(20)

) ;


