<?php 
$servidor = 'localhost';
$usuario = 'root';
$clave = 'LINUX1983';
$db = 'cursofinal';

session_start(); 

$conexion=mysqli_connect($servidor, $usuario, $clave, $db);


?>