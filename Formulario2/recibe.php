

<?php

if (!empty($_POST['nombre']) && (!empty($_POST['edad'])) && (!empty($_POST['correo']))
&& (!empty($_POST['password']))        ) {
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $password=$_POST['password'];

echo "<h1> Se obtienen los datos a traves de la variable _POST y se muestran a continuación </h1>";

echo "Bienvenido:   <b><i> $nombre </i></b><br/>";
echo "Bienvenido:   <b><i> $edad </i></b><br/>";
echo " Su correo es <b><i> $correo </i></b><br/>";
}else{
 echo "<script>
                alert('Asegurese de agreagar todos los campos correctamente');
                window.location= 'index.php'
    </script>";
}


?>

