<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Validación de Formularios </title>

<style>
	

	body {
  font  : 21px sans-serif;

  padding : 2em;
  margin  : 0;

  background : #F0F8FF;
}
h1{

	color:  	#708090;
}

form {
  position: relative;

  width  : 740px;
  height : 100px;
  margin : 0 auto;

  
}
input:focus{
  background   : rgba(0,0,0,.1);
  border-radius: 5px;
  outline      : none;
}


</style>


</head>
<body>
<h1>Ejemplo de validacion por etiquetas</h1>
<h5>Se valida que se instroduzca un correo electronico y que no hayan campos vacios, de lo contrario no se podrá acceder a la pagina recibe.php y se redireccionará  a index.php</h5>

	 <form action="recibe.php" method="POST"> <!–– enviamos los datos a recibe.php --¡>
           <input type="text" placeholder="Nombre "  name="nombre" >
           <input type="email" placeholder="Correo" name="correo"  >
            <input type="submit" name="submit" >   
  </form>


</body>
</html>