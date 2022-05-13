<?php
include("db.php");
$carnet= $_POST["carnet"];
    $nombre= $_POST["nombre"];
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];
    $edad=$_POST["edad"];
    if(empty($carnet) || empty($nombre) || empty($apellido)
|| empty($direccion)|| empty($edad)){

    echo "Hay campos vacios";    
  
    
}
 elseif(isset($_POST["enviar"]))
{

    

    $query="INSERT INTO estudiante(carnet, nombre, apellido, direccion, edad)
        VALUES('$carnet','$nombre','$apellido','$direccion','$edad') ";

    $result= mysqli_query($conexion,$query);

    if(!$result)
    {
        die("Inserccion invalidad");
    }
   
    $_SESSION['message']='Registro Insertado Con Exito';
    $_SESSION['message']='success';

    header("Location:index.php");



}


?>