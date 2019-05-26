<?php
$idTarea = $_POST['idTarea'];
include ('misFunciones.php');
$mysqli = conectaBBDD();
$id = $_POST['id'];
$resultado = $mysqli->query("SELECT * FROM nota where id_grupo = $id ");
//select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo)
$numTareas = $resultado->num_rows;


$listaTareas = array();

?>
<html>
    
    <div id="notas">
        
        
    </div>
    
    
    
    <script>
        
        
        
    </script>
</html>

