<?php

// $texto = "texto 25 de grupo-65-adso para una preeba, donde 2 realizamos la proeba";
// $texto = "al grupo de adso no le gusta laaar leer loor luur liir";
// $exp = "/PRUEBA/i";
// $exp = "/[0-9]/";
// $exp = "/^texto/i"; evalua la primera expresion del inicio de la cadena
// $exp = "/pr[eu]eba/i";
// $exp = "/grupo-[0-9]-adso/";
// la i acepta tanto minusculas como mayusculas
// $exp = "/[0-9]/";
// $exp = "/[A-Za-z]/";
// $exp = "/[\d]/";
// $texto = "los numeros naturales son  0 1 2 3 4 5 6 7 8 9";
// $exp = "/[\D]/";
// preg_match_all mira todas las coincidencias
// $resultado = preg_match($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE);// PREG_OFFSET_CAPTURE los vuelve arrays

// echo "<pre>";
// print_r($coincidencias);
// echo "</pre>";

// echo "<br>";
// print_r($resultado);
// echo "<br>";

$texto = "grupo ADSO 2894667";
// $exp = "/[A-Z]{4,}/";
$exp = "/([A-Z]{4,}\s)+([0-9]{2,})/";
$resultado = preg_match($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE);

if ($resultado){
  echo "Si tiene resultado";
}
else {
  echo "No tiene resultado";
}