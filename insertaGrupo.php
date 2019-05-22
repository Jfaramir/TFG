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

for ($i = 0; $i < $listaAnnadidos; $i++) {
    $resultado2 = $mysqli->query("INSERT INTO grupo_usuario (id, id_usuario, id_grupo) VALUES (0,$listaAnnadidos[$i], (SELECT id FROM grupos ORDER BY id DESC limit 1))");
}
?>

<html>
    <script>
        var _email = '<?php echo $email; ?>';
        //side var acction
        $("#grupos").load('cargaGrupos.php', {
            email: _email
        });
    </script>
    
</html>

