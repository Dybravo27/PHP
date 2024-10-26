<?php
/**
 * Si los alumnos en un curso se han dividido en dos grupos a y b
 * de acuerdo con el sexo y el nombre el grupo a esta formado por las mujeres con nombre de anterior
 * de la m y los hombres con posterior a la n y el grupo b por el resto, escribir un programa que pregunte al usuario
 * el nombres y su sexo y q aparezca a que grupo pertenece
 */

$nombre = "Dylan";
$sexo = "Masculino";

function grupos($nombre, $sexo){
  if ($sexo ==="F" && strtoupper($nombre) < "M" || 
  $sexo ==="M" && strtoupper($nombre) > "N") {
    return "grupo A";
  }
  else{
    return "Grupo B";
  }
}

echo grupos($nombre, $sexo);

?>