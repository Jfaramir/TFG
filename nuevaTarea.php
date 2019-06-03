<?php
include 'misFunciones.php';

$mysqli = conectaBBDD();
$nombre_ = $_POST['titulo'];
$nombreGupo = $_POST['nombre'];
$idd = $_POST['id'];
echo $idd;


$resultado = $mysqli->query("INSERT INTO tareas(id,texto_tarea,nombre,id_grupo) VALUES(0, '$nombre_' , '', '$idd')");


?>

<html>
    <script  type="text/javascript">
       var _id = '<?php echo $idd; ?>';
       var __nombre = '<?php echo $nombreGupo; ?>';
       console.log('eso'+__nombre)
          $("#tareas").load("cargaTareas.php", {
            id: _id,
            nombre: __nombre
        });    
       
    </script>
    
</html>

