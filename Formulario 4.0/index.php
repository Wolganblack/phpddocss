<?php

?>

<!DOCTYPE html>
<html>

<head>
  <title>Validación de Formularios </title>

  <style>
    body {
      font: 21px sans-serif;

      padding: 2em;
      margin: 0;

      background: #F0F8FF;
    }

    h1 {

      color: #708090;
    }

    form {
      position: relative;

      width: 740px;
      height: 100px;
      margin: 0 auto;


    }

    input:focus {
      background: rgba(0, 0, 0, .1);
      border-radius: 5px;
      outline: none;
    }
  </style>
</head>

<body>
<font face="font-family:courier,arial,helvética">

 <h1 style="text-align:center">Bienvenido al sistema de Cálculo</h1>
  </font>
  <form action="recibe.php" method="POST">
    <!–– enviamos los datos a recibe.php --¡>
   <p style = "font-family:courier,arial,helvética;">Ingrese el Nombre del trabajador:</p>
     <input type="text"  name="nombre"  placeholder="nombre" required></br>
<br></br>
<p style = "font-family:courier,arial,helvética;">Ingrese el apellido del trabajador:</p>
      <input type="text" placeholder="apellido" name="apellido" required>
      <br></br>
<p style = "font-family:courier,arial,helvética;">Seleccione el salario del trabajador para conocer su bono y Salario final:</p>

<p style = "font-family:courier,arial,helvética;">Seleccione un salario:
 <label>
    <input type="radio"  name="Salario" value=1000 required>
    1000
  </label>

  <label>
    <input type="radio"  name="Salario" value="1500">
    1500
  </label>

  <label>
    <input type="radio"  name="Salario" value="1800">
    1800
  </label>
  </p>
<input type="reset" name="reestablecer"> 
<br></br>
<input type="submit" name="submit">
  </form>


</body>

</html>