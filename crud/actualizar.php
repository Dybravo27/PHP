<?php
require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_ciudad = $_POST['id_ciudad'];
$id_genero = $_POST['id_genero'];
$id_lenguaje = $_POST['id_lenguaje'];

$sql_actua = 'UPDATE usuario SET nombre = :nombre ,apellido = :apellido ,correo = :correo ,fecha_nacimiento = :fecha_nacimiento, id_ciudad = :id_ciudad, id_genero = :id_genero WHERE id_usuario = :id_usuario';
$stm = $conexion->prepare($sql_actua);

$stm -> bindParam(":id_usuario",$id);
$stm -> bindParam(":nombre",$nombre);
$stm -> bindParam(":apellido",$apellido);
$stm -> bindParam(":correo",$correo);
$stm -> bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm -> bindParam(":id_ciudad",$id_ciudad);
$stm -> bindParam(":id_genero",$id_genero);

$stm -> execute();

$sql_elimi = 'DELETE FROM usuario WHERE id_usuario = :id_usuario';
$stm_elimi = $conexion->prepare($sql_elimi);
$stm_elimi -> bindParam(":id_usuario",$id);
$stm_elimi -> execute();

foreach ($id_lenguaje as $key => $value) {
    $sql_inser = 'INSERT INTO lenguaje_usuario(id_usuario,id_lenguaje) VALUES id_usuario = :id_usuario';
    $stm3 = $conexion->prepare($sql_inser);
    $stm3 -> bindParam(":id_usuario",$id);
    $stm3 -> bindParam(":id_lenguaje",$value);
    $stm3 -> execute();
}

header('location: usuario.php');