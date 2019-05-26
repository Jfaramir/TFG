<?php
include 'misFunciones.php';

$mysqli = conectaBBDD();
$nombre_ = $_POST['titulo'];
$id = $_POST['id'];

$resultado = $mysqli->query("INSERT INTO tareas(id,texto_tarea,nombre,id_grupo) VALUES(0, $nombre_ , '', $id)");


?>
<html>
    
    <script>
    function cargaTareas() {
        var _id = <?php echo $id?>;
        var _nombre = <?php $nombre ?>;
        console.log("id_grupo" + _id);
        $("#tareas").load("cargaTareas.php", {
            id: _id,
            nombre: _nombre
        });    
    }
    </script>
    
</html>
