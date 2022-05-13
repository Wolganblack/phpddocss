<?php

/*5.	Declare 3 variables asignadas a números reales, realice
una comparación y muestre cuál de los tres números es el mayor.*/

echo "Introduzca tres numeros enteros".PHP_EOL;
echo "</br>";

$var1= $_GET['numero1'];
$var2= $_GET['numero2']; 
$var3= $_GET['numero3'];  

 if(($var1>$var2) && ($var1>$var3))
{

        echo "La Variable Var1 es mayor que Var2 y Var3 con un Valor de:".$var1;

}

elseif (($var2>$var1) && ($var2>$var3)) {

    echo "La Variable Var2 es mayor que Var1 y Var3 con un Valor de:".$var2;

}
 
else {
      echo "La Variable Var3 es mayor que los anterios con valor de:".$var3;
}





?>