<?php

if (isset($_POST['nombre']) && (isset($_POST['edad']) && $_POST['edad']>1 ) 
&& isset($_POST['correo']) && isset($_POST['password'])) 
{
$nombre = $_POST['nombre'];
$edad= $_POST['edad'];
$correo = $_POST['correo'];

echo "<b> <i>Bienvenido su es :$nombre y su edad es:$edad
tiene correo:$correo </b> </i>";

}
elseif($edad<=0) {
echo "<script>
    alert('Introduzca correctamente la edad');
    window.location='index.php'
    </script> ";
}
else{
 echo "<script>
                alert('Asegurese de agreagar todos los campos correctamente');
                window.location= 'index.php'
    </script>";
}


?>


