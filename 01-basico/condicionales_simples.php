<?php
/**
 * Estructura condicional simple
 * if(expresion){
 * Codigo a ejecutar
 * }
 * 
 * if(expresion):
 *  Codigo a ejecutar
 * endif;
 */

 $edad = 18;
 $saludo = "Hola Mundo";
 $numero = 4;
 if($edad >= 18){
  echo "hola, usted es mayor de edad";
 }
 echo "<br>";
 ?>


 <div>
  <?php if($edad >=18): ?>
    <h1>saludo persona</h1>
  <?php endif; ?>
 </div>

 <div>
  <?php if($edad >=18){ ?>
    <h1>hola persona</h1>
  <?php } ?>
 </div>

 <div>
  <?php if($edad >=18){ ?>
    <h1>
      <?= $saludo // forma de imprimir como si fuera echo ?> 
    </h1>
  <?php } ?>
 </div>

 <!--Realizar un programa donde se pida un numero y si el numero es par debe aparecer un mensaje que indique que es par -->
<div>
  <?php if($numero %2 ==0){ ?>
    <h4>Numero es par</h4>
  <?php } ?>
</div>
 <!-- En un almacen se hace un 20% de descuento a los clientes cuya 
  compra supere los 100 dolares ¿Cual sera la cantidad que pagara una persona por su compra? -->
  <?php
  echo "<br>";
  $compra = 200;
  if ($compra > 100){
    $descuento= $compra - ($compra * 0.20);
    echo "Total a pagar ".$descuento;
  }
  ?>
