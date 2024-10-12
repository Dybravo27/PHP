<?php
/**
 * 
 * Estructura
 * if (?){
 *   if(?){
 *      codigo a ejecutar
 *   }else{
 *     Codigo a ejecutar
 *   }
 * }
 * 
 */
$a = 5;
$b = 6;
$c = 10;
if ($a > $b){
  if ($a > $c){
    echo "El mayor de los 3 numeros es: ". $a;
  }
  else{
    echo "El mayor de los 3 numeros es: ". $c;
  }
}
else{
  if ($b > $c){
    echo "El mayor de los 3 numeros es: ". $b;
  }
  else{
    echo "El mayor de los 3 numeros es: ". $c;
  }
}
echo "<br>";
$dia = 1;
if ($dia == 1){
  echo "Lunes";
}
else if ($dia == 2){
  echo "Martes";
}
else if ($dia == 3){
  echo "Miercoles";
}
else if ($dia == 4){
  echo "Jueves";
}
else if ($dia == 5){
  echo "Viernes";
}
else if ($dia == 6){
  echo "Sabado";
}
else if ($dia == 7){
  echo "Domingo";
}
else{
  echo "El numero que eligio no existe en el dia de la semana";
}