<?php
include ('misFunciones.php');



$mysqli = conectaBBDD();


$email = $_POST['email'];
$param = $_POST['param'];

if ($param == '') {

$resultado = $mysqli->query("select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo)");

} else {
    $resultado = $mysqli->query("select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo) where nombre like '%$param%'");

}
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

<div>
<div id="cajaGrupo" >

</div> 
</div>


<script>
    var listaGrupos = <?php echo json_encode($listaGrupos) ?>;
    var numGrupos = <?php echo $numGrupos ?>;
function muestra() {
        for (i = 0; i < numGrupos; i++) {
            $("#cajaGrupo").append(' <a id="grupo' + listaGrupos[i][0] + '" class="list-group-item list-group-item-action  " style="margin-top: 5px; background-color: #E67073" onclick="cargaTareas('+ listaGrupos[i][0] +','+"'"+listaGrupos[i][1] +"'"+')">' + listaGrupos[i][1] + '</a>');
            
        }


    }
    function cargaTareas(id_grupo,nombre) {
        var _id = id_grupo;
        var _nombre = nombre;
        console.log("id_grupo" + id_grupo);
        $("#tareas").load("cargaTareas.php", {
            id: _id,
            nombre: _nombre
        });    
    }
    muestra();
    
    
    
  cargaTareas(listaGrupos[0][0], listaGrupos[0][1]);


</script>

