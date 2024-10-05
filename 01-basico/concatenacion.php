<?php
$nombre = "Dylan";
$apellido = "Bravo";
$pais = "Colombia";

echo $nombre, ' ',$apellido, ' y su pais de origen es ', $pais, "<br>";
echo "<hr>";
// para interpolar se necesitan solo comillas dobles
echo "Mi pais de residencia es $pais pero tambien podemos {$nombre}";