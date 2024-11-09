<?php

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

// var_dump($_FILES);

// $temporal = $_FILES['archivo']['tmp_name'];
// $nombre_archivo = $_FILES['archivo']['name'];
// $tamaño_archivo = $_FILES['archivo']['size'];
// $type_archivo = $_FILES['archivo']['type'];
// $error_archivo = $_FILES['archivo']['error'];

// echo $temporal.'<br>';
// echo $nombre_archivo.'<br>';
// echo $tamaño_archivo.'<br>';
// echo $type_archivo.'<br>';
// echo $error_archivo.'<br>';

if (isset($_FILES['archivo'])) {
  $asignar_nombre = $_REQUEST['nombre']; // recibe el nombre del input 
  $errores = array();
  $temporal = $_FILES['archivo']['tmp_name'];
  $nombre_archivo = $_FILES['archivo']['name'];
  $tamaño_archivo = $_FILES['archivo']['size'];
  $type_archivo = $_FILES['archivo']['type'];
  $error_archivo = $_FILES['archivo']['error'];

  $bandera = (explode('.', $nombre_archivo));
  $archivo_extension = strtolower(end($bandera));
  $extensiones = array("jpeg","jpg","png");


  if(in_array($archivo_extension, $extensiones) === false){
    $errores[]= "Extension no permitida";
  }
  
  if ($tamaño_archivo > 2097152 ){
    $errores[]= "Tamaño maximo permitido es de 2MB";
  }
  if (empty($errores)) {
    //se mueve el archivo en temporal y lo movemos a una carpeta que hayamos creado, 
    //ademas se cambia el nombre al que uno elija
    move_uploaded_file($temporal,"imagenes/".$asignar_nombre.rand(1, 10).".".$archivo_extension);
  }
}
else {
    echo "no envio archivo";
}