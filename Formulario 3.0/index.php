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
<h1>Introduzca dos numeros para realizar la multiplicacion</h1>

	 <form action="recibe.php" method="POST"> <!–– enviamos los datos a recibe.php --¡>
           <input type="number"placeholder="numero1" name="numero1" required >
           <input type="number" placeholder="numero2" name="numero2" required >
           <input type="submit" name="submit" >   
  </form>


</body>
</html>