<?php
// $estudiantes = array('Carlos','Jose','Maria','Luis');

$estudiantes = ['Carlos','Jose','Maria','Luis'];

echo "<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo "</pre>";

echo $estudiantes[2];

$aprendiz = [
  'nombre' => 'Dylan',
  'apellido' => 'Bravo',
  'edad' => 17,
  'deudas' => '3.700.000.00'
];

echo "<pre>";
print_r($aprendiz);
echo "</pre>";
$tutor = [
  'nombre' => 'Martha Becerra',
  'apellido' => 'Berdugo',
  'edad' => 50,
  'direccion'=> [
    'ciudad' => 'Bucaramanga',
    'barrio' => 'San francisco',
    'nomenclatura' => 'Carrera 15#1A-12',
    'zipcode' => 665745
  ],
  'habilidades'=>[
    'git','html','css','js','php','python','sql'
  ]
];
echo "<pre>";
print_r($tutor);
echo "</pre>";
echo("<hr>");

// Imprimir en la direccion la nomenclatura
echo "<pre>";
print_r($tutor['direccion']['nomenclatura']);
echo "</pre>";

// Imprimir en habilidades php
echo "<pre>";
print_r($tutor['habilidades'][4]);
echo "</pre>";

// cambiar js a javascript
echo("<hr>");
$tutor['habilidades'][3]='javascript';
echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

// Agregar valor al array
$tutor['direccion']['departamento']='santander';
echo("<hr>");
echo "<pre>";
print_r($tutor['direccion']);
echo "</pre>";

// Eliminar valor del array
unset($tutor['habilidades'][4]);
array_splice($tutor['habilidades'], 4, 2);

echo("<hr>");
echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

// contar elementos
echo("<hr>");
echo count($tutor['habilidades']);