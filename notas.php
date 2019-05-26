<?php
$idTarea = $_POST['idTarea'];
include ('misFunciones.php');
$mysqli = conectaBBDD();
$id = $_POST['id'];
$resultado = $mysqli->query("select * from notas inner join notas_grupo on(notas.id = notas_grupo.id) where notas_grupo.id_tarea = $id;");

$numNotas = $resultado->num_rows;


$listaNotas = array();

for ($i = 0; $i < $listaNotas; $i++) {
    
    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
    $listaNotas[$i][0] = $r['id'];
    $listaNotas[$i][1] = $r['texto_tarea'];
    $listaNotas[$i][2] = $r['nombre'];
    $listaNotas[$i][3] = $r['id_grupo'];

    
}
?>
?>
<html>
    
    <div id="notas">
        <div>
            
        </div>
        
    </div>
    
    
    
    <script>
        ('#notas').apeand()
        
        
    </script>
</html>

