<?php

include ('misFunciones.php');



$mysqli = conectaBBDD();
echo 'cargaTareas';

$id_grupo = $_POST['id_grupo'];
$resultado = $mysqli->query("");

//select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo)
$numGrupos = $resultado->num_rows;



$listaTareas = array();

for ($i = 0; $i < $numTareas; $i++) {
    
    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
    $listaTareas[$i][0] = $r['id'];
    $listaTareas[$i][1] = $r['texto_tarea'];
    $listaTareas[$i][2] = $r['nombre'];
    $listaTareas[$i][3] = $r['id_grupo'];

    
}
?>
<div id="cajaTareas">
    
</div>




<script>
var listaGrupos = <?php echo json_encode($listaTareas) ?>;
var numTareas = <?php echo $numTareas ?>;
function muestra(){
    for(i =0; i< numTareas; i++ ){
        $("#cajaTarea").append(' <a id="Tarea"href="#" class="list-group-item list-group-item-action bg-dark">'+listaTareas[i][1]+'</a>')
    }
    
    
}
    muestra();
    
    
</script>