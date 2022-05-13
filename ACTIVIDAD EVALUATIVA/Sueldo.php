<?php 
/*Calcule el Salario final que tendrá una persona teniendo en 
cuenta que si el sueldo es menor a C$1000 recibirá un aumento
 de 20%, si el sueldo >=1000 y sueldo <=$1500 recibirá un 
 aumento 15% sueldo es una variable real 
 (Definida por usted, tome en cuenta que si se modifica ese
  valor las condiciones sean siempre validas)
 que expresa el sueldo del trabajador.*/
$SALARIO=$_POST['Pago'];
if ($SALARIO<=0) {
    echo "Introduzca su salario correctamente:"; 
}
else if($SALARIO<1000)
{
    $NUEVO_SALARIO=$SALARIO+($SALARIO*0.20);
    echo "Su nuevo salario es:".$NUEVO_SALARIO.PHP_EOL;
}
elseif ($SALARIO>=1000 || $SALARIO<=1500) {
    
    $NUEVO_SALARIO=$SALARIO+($SALARIO*0.15);
    echo "Su nuevo salario es:".$NUEVO_SALARIO.PHP_EOL;
}
 
?>