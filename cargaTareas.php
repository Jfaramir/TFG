 <?php

include ('misFunciones.php');



$mysqli = conectaBBDD();


$id = $_POST['id'];

$resultado = $mysqli->query("SELECT * FROM tareas where id_grupo = $id ");

//select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo)
$numTareas = $resultado->num_rows;


$listaTareas = array();

for ($i = 0; $i < $numTareas; $i++) {
    
    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
    $listaTareas[$i][0] = $r['id'];
    $listaTareas[$i][1] = $r['texto_tarea'];
    $listaTareas[$i][2] = $r['nombre'];
    $listaTareas[$i][3] = $r['id_grupo'];

    
}
?>
<div>
<div id="cajaTareas" >   
     <a class=" align-content-lg-start">Tarea</a> <button class="btn-dark" onclick="nuevaTarea()"> +</button>

    
</div>
</div>



<script>
var listaTareas= <?php echo json_encode($listaTareas) ?>;
var numTareas = <?php echo $numTareas ?>;
function muestra(){
    for(i =0; i< numTareas; i++ ){
        $("#cajaTareas").append(' <a id="" href="#" onclick="contenidoTarea('+listaTareas[i][0]+')" class="list-group-item bg-dark" >'+listaTareas[i][1]+'</a>');
    }

    
}

function contenidoTarea(_idTarea){
     $("#cajaTareas").load('cargaContenido.php',{
         idTarea:_idTarea
     });
    
}

    muestra();
    
    
</script>