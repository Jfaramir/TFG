<?php
include 'misFunciones.php';

$mysqli = conectaBBDD();
$nombre_ = $_POST['titulo'];
$nombreGupo = $_POST['nombre'];
$id = $_POST['id'];
echo $id;
echo $nombre_;
echo $nombreGupo;

$resultado = $mysqli->query("INSERT INTO tareas(id,texto_tarea,nombre,id_grupo) VALUES(0, '$nombre_' , '', '$id')");


?>
<html>
    
    <script>
         var _id = '<?php echo $id?>';
        var _nombre = '<?php echo $nombre ?>';
    function cargaTareas() {
       
        $("#tareas").load("cargaTareas.php", {
            id: _id,
            nombre: _nombre
            
        });  
    }
   cargaTareas();
    </script>
    
</html>
