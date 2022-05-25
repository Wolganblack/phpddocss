<?php

if ((isset($_POST['numero1'])  && (isset($_POST['numero2'])  ) 
) )
{
$numero1 =  $_POST['numero1'];
$numero2=   $_POST['numero2'];
$multiplicacion = $numero1*$numero2;

echo "<b> <i> El resultado obtenido de la multiplicacion es: $multiplicacion </b> </i>";
}

else{
 echo "<script>
                alert('Asegurese de agreagar todos los campos correctamente');
                window.location= 'index.php'
    </script>";
}


?>


