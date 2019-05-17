<?php

include 'misFunciones.php';

$mysqli = conectaBBDD();
$id = $POST_['id_tarea'];
$resultado = $mysqli->query("SELECT * FROM notas where id_tarea = $id ");

$numNotas = $resultado->num_rows;


$listaNotas = array();

for ($i = 0; $i < $numNotas; $i++) {

    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
    $listaNotas[$i][0] = $r['id'];
    $listaNotas[$i][1] = $r['texto_notas'];
    $listaNotas[$i][2] = $r['id_tarea'];
}
?>

<div id= "cajaNotas" style="width:100% ">
</div>


