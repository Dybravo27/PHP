<?php
$texto = "Fundamentos de programacion en php";
$asignacion = $texto;
$referencia = &$texto;
echo $asignacion;
echo "<br>";
echo $referencia;
$texto = "Asignacion por referencia";
echo "<br>";
echo $referencia;