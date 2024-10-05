<?php
/**
 * combinar dos comparaciones
 * --------simbolo----------Nombre--------
 *         and              and (y)
 *         or               or (o)
 *         !                not (no)
 *         &&               and (y)
 *         ||               or (o)
 * 
 * --------Tabla de operadores AND--------
 * Expresión 1              Expresión 2         Resultado
 * false            &&      False               false
 * false            &&      True                false
 * True             &&      True                True
 * true             &&      false               false
 */

 $valor1 = 7;
 $valor2 = 2;
 var_dump($valor1 == 7 && 2 >3);
 echo "<br>";
 var_dump($valor1 == 7 && 9 > 3);
 echo "<hr>";
/**
 * --------Tabla de operadores OR--------
 * Expresión 1              Expresión 2         Resultado
 * false            ||      false               false
 * false            ||      true                true
 * true             ||      false               true
 * true             ||      true                true
 * 
 */
 var_dump($valor1 == 7 or 2 > 3);
 echo "<br>";
 var_dump($valor1 == 5 || 9 > 3);
 echo "<br>";
 var_dump($valor1 == 5 || 1 > 3);