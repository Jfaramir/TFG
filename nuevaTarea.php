<?php
include 'misFunciones.php';

$mysqli = conectaBBDD();
$nombre_ = $_POST['titulo'];
$nombreGupo = $_POST['nombre'];
$idd = $_POST['id'];
echo $nombreGupo;


$resultado = $mysqli->query("INSERT INTO tareas(id,texto_tarea,nombre,id_grupo) VALUES(0, '$nombre_' , '', '$idd')");


?>

<html>
    <label id="ll" style="background-color:  #DDDDDD;color: #DDDDDD"><?php echo $nombreGupo ;?></label>
   <script>
        $('#ll').hide();
    var _id = '<?php echo $idd; ?>';
      var __nombre = $('#ll').text() ;  
       
       console.log('eso'+__nombre);
          $("#tareas").load("cargaTareas.php", {
            id: _id,
            nombre: __nombre
        });  
</script>
    
</html>

