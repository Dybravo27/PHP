<?php
/**
 * Operadores de incremento y decremento
 * 
 * Simbolo           Nombre
 * ++                Incremento
 * --                Decremento
 * 
 * Ejemplo
 * 
 * ++$variable      Pre-incremento
 * --$variable      Pre-decremento
 * 
 */

 $numero = 10;
 // se incrementa o se decrementa el valor de la variable de a 1 antes de ser utilizada
 //Primero incrementa y luego realiza la operacion

 echo "Pre incremento ".++$numero;
 echo "<br>";
//  Primero realiza la operacion y luego incrementa
 echo "Post incremento".$numero++;
 echo "<br>";
 echo $numero;

 echo "<br>";
//  Primero resta y luego realiza la operacion
 echo "Pre decremento". --$numero;
 echo "<br>";

 echo "Post decremento".$numero--;// 10
 echo "<br>";
 echo $numero;
 echo "<br>";
//  10 + 1 = 11
 $resultado = ++$numero;
 
 echo $resultado;
 
 echo "<br>";
//  Primero asigna el valor a la variable y luego si incrementa de a 1
 $resultado = $numero++;
 echo $resultado;