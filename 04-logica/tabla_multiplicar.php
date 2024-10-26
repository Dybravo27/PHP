<?php
// hacer la tabla del 1 hasta el 10

$valor1 = 5;
$valor2 = 10;

function tabla($valor1, $valor2){
  for ($i=1; $i < $valor2; $i++) {
    $resultado = "$valor1 X $i = ".($valor1 * $i);
    echo $resultado."<br>";
  }
}

$respuesta = tabla($valor1, $valor2);