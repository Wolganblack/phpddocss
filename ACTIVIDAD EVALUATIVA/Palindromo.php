<?php

$cadena = $_GET['Palabra'];

$separar = explode(" ", strtolower($cadena));

foreach($separar as $palabra)
{
    trim($palabra);
    $nuevo = $palabra; 
}

if($nuevo == strrev($nuevo))
{
    echo "Si es Palindromo";
}
else {
    echo "No es Palindromo";
}

?>