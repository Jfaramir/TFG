
insert into grupos(id,nombre,imagen,id_admin) values (0,'Mi Primer Grupo','',0);
insert into grupo_usuario(id,id_usuario,id_grupo) values(0,1,1);
insert into tareas(id,texto_tarea,nombre,id_grupo) values (0,'Mi Primera tarea','Tarea1',1);
insert into notas(id,titulo,texto_nota) values(0,"Mi primera nota","Mi primer comentario");
insert into notas_grupo(id,id_nota,id_tarea) values (0,1,1);