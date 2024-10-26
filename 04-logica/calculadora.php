<?php
$num1 = 25;
$num2 = 5;
function calculadora($num1, $num2)
{ 
  try{
    // dividir
    if ($num2 === 0) {
      throw new Exception('Error division por cero no se puede');
    }
    if (!is_numeric($num1) || !is_numeric($num2)) {
      throw new Exception('Error no se aceptan valores que no sean numericos');
    }
    $respuesta = array(
    "suma" => $num1 + $num2,
    "resta" => $num1 - $num2,
    "multiplicacion" => $num1 * $num2,
    "division" => $num1 / $num2);
    return $respuesta;
  }
  catch (Exception $e){
    return $e->getMessage();
  }

}

$resultado = calculadora($num1,$num2);
echo "<pre>";
print_r($resultado);
echo "</pre>";

?>