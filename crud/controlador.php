<?php
require('conexion.php');

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
// die();
$db = new Conexion();
$conexion = $db->getConexion();
 // recibimos los valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_ciudad = $_POST['id_ciudad'];
$id_genero = $_POST['id_genero'];
$id_lenguaje = $_POST['id_lenguaje'];


$sql = "INSERT INTO usuarios (nombre,apellido,correo,fecha_nacimiento,id_ciudad,id_genero) VALUES
(:nombre,:apellido,:correo,:fecha_nacimiento,:id_ciudad,:id_genero)";


$stm = $conexion->prepare($sql);

$stm -> bindParam(":nombre",$nombre);
$stm -> bindParam(":apellido",$apellido);
$stm -> bindParam(":correo",$correo);
$stm -> bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm -> bindParam(":id_ciudad",$id_ciudad);
$stm -> bindParam(":id_genero",$id_genero);

$stm -> execute();

$id_usuario = $conexion->lastInsertId();

foreach ($id_lenguaje as $key => $value) {
    $sql_lengua ="INSERT INTO lenguajes (nombre_lenguaje) VALUES 
    (:nombre_lenguaje)";
    $stm_lenguaje = $conexion->prepare($sql_lengua);
    $stm_lenguaje = bindParam(":nombre_lenguaje",$id_lenguaje);
    var_dump($key);
    echo"<br>";
    var_dump($value);
}

