DROP DATABASE IF exists recordator;

CREATE DATABASE recordator;

USE recordator;


CREATE TABLE `usuarios` (
--hay que poner un id 
email varchar (50),
nombre varchar (50),
 PRIMARY KEY (`email`)
) ;

CREATE TABLE `grupos` (
id int(100) auto_increment,
nombre Varchar(50),
foto varchar(20),
moderador int(50),

) ;

CREATE TABLE `usuario_grupos` (
id int(1000) auto_increment,
id_grupo int(100),
email_usuario varchar(100)
PRIMARY KEY (id),
FOREIGN KEY (id_grupo) REFERENCES grupos (id) on delete cascade,
FOREIGN KEY (email_usuario) REFERENCES usuarios (email) on delete cascade
) ;


