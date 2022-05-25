<?php

if (isset($_POST['nombre']) && (isset($_POST['Salario']) && $_POST['Salario']==1000 ) 
&& isset($_POST['apellido'])) 
{
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];
$Salario=$_POST['Salario'];
$bono=50;
$Salariofinal=$Salario+$bono;

echo"<h3>Sistema de Cálculo</h3>";

echo "<b> <i> El trabajador :$nombre Con el apellido: $apellido </b> </i>";
echo "<b> <i> Su bono :$bono y su salario final es de: $Salariofinal </b> </i>";";
}

 elseif(isset($_POST['nombre']) && (isset($_POST['Salario']) && $_POST['Salario']==1500 ) 
&& isset($_POST['apellido'])) 
{
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];
$Salario=$_POST['Salario'];
$bono=60;
$Salariofinal=$Salario+$bono;

echo"<h3>Sistema de Cálculo</h3>";

echo "<b> <i> El trabajador :$nombre Con el apellido: $apellido </b> </i>";
echo "<b> <i> Su bono :$bono y su salario final es de: $Salariofinal </b> </i>";;
}

elseif (isset($_POST['nombre']) && (isset($_POST['Salario']) && $_POST['Salario']==1800 ) 
&& isset($_POST['apellido'])) 
{
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];
$Salario=$_POST['Salario'];
$bono=100;
$Salariofinal=$Salario+$bono;

echo"<h3>Sistema de Cálculo</h3>";

echo "<b> <i> El trabajador :$nombre Con el apellido: $apellido </b> </i>";
echo "<b> <i> Su bono :$bono y su salario final es de: $Salariofinal </b> </i>";
}

else{
 echo "<script>
                alert('Asegurese de agreagar todos los campos correctamente');
                window.location= 'index.php'
    </script>";
}
