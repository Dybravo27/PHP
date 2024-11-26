<?php
require('conexion.php');

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

// echo "<pre>";
// print_r($id_lenguaje);
// echo "</pre>";

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

$id_usuario = $conexion->lastInsertId(); // envia el ultimo id

$sql_lenguaje ="INSERT INTO lenguaje_usuario (id_usuario,id_lenguaje) VALUES (:id_usuario,:id_lenguaje)";
$stm = $conexion->prepare($sql_lenguaje);
// recorrer
foreach ($id_lenguaje as $key => $value) {
    $stm ->  bindParam(":id_usuario",$id_usuario);
    $stm ->  bindParam(":id_lenguaje",$value);
    $stm -> execute();
}

// redireccionar el usuario

header('location: usuario.php');