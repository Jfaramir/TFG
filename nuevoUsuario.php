<?php
include ('misFunciones.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$id = $_POST['id'];
echo $nombre;

$mysqli = conectaBBDD();

 $resultado= $mysqli -> query("INSERT INTO usuarios(email,nombre) VALUES('$email','$nombre')");
if (!$resultado) {
   printf("Errormessage: %s\n", $mysqli->error);
} $mysqli ->close();
 require 'principal.php';


