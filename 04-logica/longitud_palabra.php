<?php
// cree una funcion que calcule la longitud de una palabra si es corta o es larga las palabras cortas son menores que 5 caracteres

$palabra = "esternocleidomastoideo";
echo "La palabra que escogio es: $palabra <br>";
function longitud($palabra) {
  if (strlen($palabra) < 5) {
    return "La palabra es corta";
  }
  else {
    return "La palabra es larga";
  }
}
$resultado = longitud($palabra);
echo $resultado;
