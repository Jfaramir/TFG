<?php
include ('misFunciones.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$id = $_POST['id'];


$mysqli = conectaBBDD();
$consulta = $mysqli -> query("select email from usuarios where email = '$email'");

$resultado2 = mysqli_fetch_array($consulta);
/*
echo $resultado2['email'];
echo $email;
 */
 if ($resultado2['email']) {
     require 'principal.php';

} else {
    
$resultado = $mysqli->query("INSERT INTO usuarios(email,nombre) VALUES('$email','$nombre')");
require_once 'principal.php';
  
} 
  if (!$resultado2) {
        printf("Errormessage: %s\n", $mysqli->error);
  } $mysqli->close();
 

