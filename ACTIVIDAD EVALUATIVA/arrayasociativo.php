<?php
/*9.Cree un arreglo asociativo que guarde la información de una
 persona (nombre, edad, ciudad, celular)  y
  muestre su información.*/
$asociativo =[
    "nombre:" => "alfonso", "edad:" => "39",
    "ciudad:" => "leon", "celular:" => "88511532"
];

foreach($asociativo as $asociar=>$datos)
  {

        echo $asociar.PHP_EOL.$datos.PHP_EOL;
  }
  ?>