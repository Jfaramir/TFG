<?php
include ('misFunciones.php');


$id = $_POST['id'];
$mysqli = conectaBBDD();
$resultado = $mysqli->query("SELECT * FROM grupos WHERE id = $id");
$numGrupos = $resultado->num_rows;
$listaGrupos = array();
for ($i = 0; $i < $numGrupos; $i++) {

    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
    $listaGrupos[$i][0] = $r['id'];
    $listaGrupos[$i][1] = $r['nombre'];
    $listaGrupos[$i][2] = $r['imagen'];
    $listaGrupos[$i][3] = $r['id_admin'];
}

$resultado2 = $mysqli->query("SELECT first_name,email FROM users INNER JOIN grupo_usuario ON (users.id = grupo_usuario.id_usuario) WHERE grupo_usuario.id_grupo = $id");
$usuarios = $resultado->num_rows;
$listaUsuarios = array();
for ($i = 0; $i < $usuarios; $i++) {

    $r = $resultado2->fetch_array(); //leo una fila del resultado de la query
    $listaUsuarios[$i][0] = $r['first_name'];
    $listaUsuarios[$i][1] = $r['email'];
    

    
}




?>

<html>
    <button type="button" class="btn  btn-outline-danger  btn-lg  " style="margin: 3%">Salir del grupo</button>
    
    <div id="cajaParticipantes">
        
        
    </div>
    
    <script>
    
    
        
        function salir(){
            
            
        }
        
        
        
        function cargaParticipantes(){
            
        }
    
    
    
    </script>
</html>

