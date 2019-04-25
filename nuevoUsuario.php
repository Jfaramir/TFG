<?php
include ('misFunciones.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$id = $_POST['id'];
echo $nombre;

$mysqli = conectaBBDD();

 $resultado= $mysqli -> query("INSERT INTO recordator('id','email','nombre') VALUES('$id','$email','$nombre')");

 require 'principal.php';


