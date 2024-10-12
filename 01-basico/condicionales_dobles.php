<?php
/**
 * Estructura condicional doble (if - else)
 * 
 * if(expresion){
 *  Código a ejecutar si la expresión es verdadera
 * }
 * else{
 *  Código es falsa
 * }
 * 
 * if (expresion):
 *  si es verdadera
 * else:
 *  si es falsa
 *  endrif;
 */

 if (1 > 7){
  echo "Condicion evalua a verdadera";
 }
 else{
  echo "Condicion evalua a false";
 }
echo "<br>";
echo "<hr>";
 if (9 == 12):
  echo "condicion que evalua a verdadero";
 else:
  echo "Condicion evalua a falsa";
 endif;

// Calcular el total que una persona debe pagar en un montallantas,
// el precio de cada llanta es 800 si se compra menos de 5 llantas y
// de 700 si se compran 5 o mas llantas
echo "<br>";
echo "<hr>";
$cant_llantas = 20;
if ($cant_llantas < 5){
  $resultado = $cant_llantas * 800;
}
else{
  $resultado = $cant_llantas * 700;
}
echo "Total a pagar por las llantas es de: $". $resultado;
echo "<br>";
// determinar si un alumno aprueba o repueba el curso sabiendo que aprobara 
// si su promedio de 3 calificaciones es mayor o igual a 3.0, de lo contrario reprueba
$nota1 = 5;
$nota2 = 2;
$nota3 = 4;
echo "<hr>";

$promedio = ($nota1 + $nota2 + $nota3)/3;
if ($promedio > 3.0){
  echo "El alumno ha sido aprobado con: ". $promedio;
}
else{
  echo "El alumno ha sido reprobado con: ". $promedio;
}

echo "<hr>";
/**
 * OPERADOR TERNARIO
 *  operador ? true : false;
 */

// (8 >= 10) ? echo "verdadero" : echo "es falso";

$num1 = 2;
$num2 = 5;
$result = ($num1 > $num2) ? ($num1 * $num2) : ($num1 / $num2);
echo "Resultado: ". $result;
