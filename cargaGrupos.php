<?php

include ('misFunciones.php');



$mysqli = conectaBBDD();

$email = $_POST['email'];
$resultado = $mysqli->query("select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo)");

//select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo)
$numGrupos = $resultado->num_rows;



$listaGrupos = array();

for ($i = 0; $i < $numGrupos; $i++) {
    
    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
    $listaGrupos[$i][0] = $r['id'];
    $listaGrupos[$i][1] = $r['nombre'];
    $listaGrupos[$i][2] = $r['imagen'];
    $listaGrupos[$i][3] = $r['id_admin'];

    
}
?>

    
</div><div id="cajaGrupo" >
    
</div>



<script>
var listaGrupos = <?php echo json_encode($listaGrupos) ?>;
var numGrupos = <?php echo $numGrupos ?>;
function muestra(){
    for(i =0; i< numGrupos; i++ ){
        $("#cajaGrupo").append(' <a id="" class="list-group-item list-group-item-action bg-dark" onclick="cargaTareas('+listaGrupos[0][1]+')">'+listaGrupos[i][1]+'</a>');
    }
    
    
}
function cargaTareas(var id_grupo){
   var _id = id_grupo;
 $("#grupos").load("cargaTareas.php", {
        id:_id
    });
}
    muestra();
    
    
</script>
