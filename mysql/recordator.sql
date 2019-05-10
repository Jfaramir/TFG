DROP DATABASE IF EXISTS recordator;
CREATE DATABASE recordator;
USE recordator;
CREATE TABLE `users` (
  `id` int(11) auto_increment,
  `oauth_provider` varchar(15)  NOT NULL,
  `oauth_uid` varchar(25)  NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10)DEFAULT NULL,
  `locale` varchar(10)  DEFAULT NULL,
  `picture` varchar(255)  DEFAULT NULL,
  `link` varchar(255) ,
  primary key (`id`),
  unique key (`email`)

) ;

CREATE TABLE `admins` (
  `id` int(11) auto_increment,
  `nombre` varchar(25), 
  `id_usuario` int(11),
  primary key (`id`),
  foreign key (id_usuario) references `users` (`id`)

);

CREATE TABLE `grupos` (
  `id` int(11) auto_increment,
  `nombre` varchar(25) ,
  `imagen` varchar(255),
  `id_admin` int(11) NOT NULL,
  primary key (`id`)
);

CREATE TABLE `tareas` (
  `id` int(11) auto_increment,
  `texto_tarea` varchar(250) ,
  `nombre` varchar(25) ,
  `id_grupo` int(11) ,
  primary key (`id`),
  fOREIGN KEY (`id_grupo`) REFERENCES `grupos`(`id`)
) ;
CREATE TABLE `archivos` (
  `id` int(11) auto_increment,
  `ruta` varchar(255) ,
  `tipo` varchar(10)  ,
  `id_tarea` int(11) NOT NULL,
  primary key (`id`)
);

CREATE TABLE `notas` (
  `id` int(11) auto_increment,
  `texto_nota` varchar(250) ,
  `id_tarea` int(11),
  primary key (`id`),
FOREIGN KEY (`id_tarea`) REFERENCES `tareas`(`id`)

) ;



CREATE TABLE `recordatorios` (
  `id` int(11) auto_increment,
  `texto_recordatorio` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_tarea` int(11) NOT NULL,
  primary key (`id`),
     FOREIGN KEY (`id_tarea`) REFERENCES `tareas`(`id`)

) ;

CREATE TABLE `subtareas` (
  `id` int(11) auto_increment,
  `texto_subtarea` varchar(255) ,
  `id_tarea` int(11) NOT NULL,
  primary key (`id`),
FOREIGN KEY (`id_tarea`) REFERENCES `tareas`(`id`)

) ;





CREATE TABLE grupo_usuario(
id int(11) auto_increment,
id_usuario int(11),
id_grupo int(11),
primary key (`id`),
foreign key (id_usuario) references `users` (`id`),
foreign key (id_grupo) references `grupos` (`id`)
);
create table asignaciones(
id int(11) auto_increment,
id_admin int(11),
id_tarea int(11),
id_usuario int(11),
primary key (`id`),
foreign key (id_usuario) references `users` (`id`),
foreign key (id_admin) references `admins` (`id`),

foreign key (id_tarea) references `users` (`id`)

);







 

 













