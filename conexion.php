<?php

//Archivo para conectar con la BD
$host = "localhost";
$user = "root";
$pass = "";
$db = "decartonbd";
$puerto = 3306;

//var_dump($host,$user,$pass,$db,$puerto);

$con = mysqli_connect($host,$user,$pass,$db,$puerto) or die ("Problemas de conexion");

mysqli_Select_db($con,$db) or die ("problemas para conectar con la BD");

?>