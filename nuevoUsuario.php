<?php
include ('misFunciones.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$id = $_POST['id'];

$mysqli = conectaBBDD();
$consulta = $mysqli -> query("select email from users where email = '$email'");

$devuelve= $consulta->num_rows;
/*
echo $resultado2['email'];
echo $email;
 */
 if ($devuelve>0) {
     require 'principal.php';

} else {
    
$resultado = $mysqli->query("INSERT INTO users(id,email,first_name) VALUES(0,'$email','$nombre')");
require_once 'principal.php';
  
} 
  if (!$devuelve) {
        printf("Errormessage: %s\n", $mysqli->error);
  } $mysqli->close();
 

