<?php
include './misFunciones.php';


$texto = ''; //busqueda
$registros = '';
?>

<script>

function Buscador(){
    if ($_POST){

    $busqueda = trim($_POST['buscar']);
    $entero = 0;
    if (empty($busqueda)){
    $texto = 'Búsqueda sin resultados';

    $sql = "SELECT * FROM grupos WHERE nombre LIKE '%".$busqueda."%' ";
    $resultado = mysql_query($sql);
    if (mysql_num_rows($resultado) > 0){
    
    $registros = '<p>HEMOS ENCONTRADO '.mysql_num_rows($resultado).' registros </p>';
   
    while ($fila = mysql_fetch_assoc($resultado)){
    $texto. = $fila['grupos'].'<br />';
    }

    } else{
    $texto = "NO HAY RESULTADOS";
    }

    }
    }
    }
    



</script>



