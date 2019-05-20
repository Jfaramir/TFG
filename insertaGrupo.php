<?php

include ('misFunciones.php');


$mysqli = conectaBBDD();
$nombre = $_POST['nombreGrupo'];
//$listaAñadidos = $_POST['listaAñadidoS'];
$resultado = $mysqli->query("INSERT into grupos (id, nombre, imagen, id_admin) VALUES(0,'$nombre' ,'', 1)");
//$consulta = $mysqli->query("select * from grupos where nombre limit 1;");
//for ($i = 0; $i < $listaAñadidos.length; $i++) {
//$resultado = $mysqli->query("INSERT INTO grupo_usuario (id, id_usuario, id_grupo) VALUES (0$ listaAñadidos[$i], 1)"

?>

