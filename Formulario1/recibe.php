

<?php

if (!empty($_POST['nombre']) && (!empty($_POST['correo']))) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
echo "<h1> Se obtienen los datos a traves de la variable _POST y se muestran a continuación </h1>";

echo "Bienvenido:   <b><i> $nombre </i></b><br/>";
echo " Su correo es <b><i> $correo </i></b><br/>";
}else{
 echo "<script>
                alert('Asegurese de agreagar todos los campos correctamente');
                window.location= 'index.php'
    </script>";
}


?>

