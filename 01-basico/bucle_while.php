<?php
$a = 1;
while ($a <=10){
  if ($a != 8 ){
  }
  echo "$a <br>";
  $a++;
}
echo "<hr>";
$p = 1;
$tabla = 9;

while ($p <=10){
  echo $tabla." x ".$p." =". $p * $tabla;
  echo "<br>";
  $p++;
}
// 
// echo "<br>";
// echo "<hr>";
// echo "Tabla que llega hasta un numero primo y que el 8 se lo salta";
// echo "<br>";
// echo "<br>";

// $num1 = 2;
// $tabla2 = 9;
// while ($num1 <=10){
//   $num1++;
//   if ($num1 % $num1 != 0){
    
//   }
//   if ($num1 == 8){
//     continue;
//   }
//   echo $tabla2." x ".$num1." =". $num1 * $tabla2;
//   echo "<br>";
// }
echo "<br>";
echo "<hr>";

function esPrimo($numero){//parametro
  $p = 2;
  $primo = true;
  while ($p < $numero/2 && $primo){
    if ($numero % $p == 0){
      $primo = false;
    }
    $p++;
  }
  return $primo;
}
$primo = esPrimo(70)? "si" : "no";//argumento
echo $primo;
