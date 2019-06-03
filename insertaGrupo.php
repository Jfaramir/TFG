<?php
session_start();
$email =$_SESSION['email'];

include ('misFunciones.php');

echo 'insertaa';
$mysqli = conectaBBDD();
$nombre = $_POST['nombreGrupo'];
/* @var $_POST type */
$listaAnnadidos = $_POST['lista'];
$resultado = $mysqli->query("INSERT into grupos (id, nombre, imagen, id_admin) VALUES(0,'$nombre' ,'', 1)");
//$consulta = $mysqli->query("SELECT id FROM grupos ORDER BY id DESC limit 1");
$idconsulta = $mysqli->query ('SELECT id FROM grupos ORDER BY id DESC limit 1');
$id = $idconsulta->fetch_array();

$idBueno = $id["id"];

echo $nombrebueno;
echo $idBueno;
echo $id["id"];
for ($i = 0; $i < count($listaAnnadidos); $i++) {
  echo $listaAnnadidos[$i];
    $resultado2 = $mysqli->query("INSERT INTO grupo_usuario (id, id_usuario, id_grupo) VALUES (0,$listaAnnadidos[$i],'$idBueno' )");
}
?>

<html>
    <script  type="text/javascript">
        var _email = '<?php echo $email; ?>';
       var _id = '<?php echo $idBueno; ?>';
       var __nombre = '<?php echo $nombre; ?>';
       console.log('eso'+__nombre)
          $("#tareas").load("cargaTareas.php", {
            id: _id,
            nombre: __nombre
        });    
        $("#grupos").load('cargaGrupos.php', {
            email: _email,
            param: ''
        });
    </script>
    
</html>

