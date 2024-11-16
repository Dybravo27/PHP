<?php


require('conexion.php');

$db ="";
$conexion ="";

$db = new Conexion();
$conexion = $db->getConexion();

$sql = "SELECT * FROM ciudades";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$ciudades = $bandera->fetchAll();

echo "<pre>";
print_r($ciudades);
echo "</pre>";
