<?php
/**
 * En una farmacia aplica al precio de los remedios el 10% de descuento,
 * hacer un programa que ingresando el costo de los remedios, calcular el valor del descuento y muestre el precio
 */

$precio = 5000;
$descuento = 0.10;

function farmacia($precio, $descuento){
  $valor_descuento = ($precio * $descuento);
  return $valor_descuento;
}

// function medicamentos($precio,$descuento){
//   $precio_total = $precio - $valor_descuento;
//   return $precio_total;
// }
$resultado =farmacia($precio, $descuento);
// $descuento_medicamentos = medicamentos($precio,$descuento);

echo "El valor del descuento es: ".$resultado;
echo "<br>";
echo "El precio total con el descuento es: ".$precio - $resultado;