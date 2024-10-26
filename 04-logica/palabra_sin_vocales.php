<?php
// escriba una funcion que tome una cadena y devuelva una nueva cadena pero sin las vocales


$palabra = "Murcielago";

function vocales($palabra){
  $sin_vocales = preg_replace('/a|á|e|é|i|í|o|ó|u|ú/','',strtolower($palabra));
  return $sin_vocales;
}
$texto = vocales($palabra);

echo  "La cadena que esribio es: $palabra <br> Sin vocales es: $texto";
