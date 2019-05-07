<?php
include ('misFunciones.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];

$mysqli = conectaBBDD();
$consulta = $mysqli -> query("select email from users where email = '$email'");

$devuelve= $consulta->num_rows;
/*
echo $resultado2['email'];
echo $email;
 */
 if ($devuelve>0 ) {
     require 'principal.php';
     
}else {
    
    
$resultado = $mysqli->query("INSERT INTO users(id,email,first_name) VALUES(0,'$email','$nombre')");
require_once 'principal.php';
  
} 
$mysqli->close();
 

