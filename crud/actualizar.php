<?php
require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_ciudad = $_POST['id_ciudad'];
$id_genero = $_POST['id_genero'];
$id_lenguaje = $_POST['id_lenguaje'];
$id_usuario = $_POST['id_usuario'];

$sql_actualizar = 'UPDATE usuarios SET nombre = :nombre ,apellido = :apellido ,correo = :correo ,fecha_nacimiento = :fecha_nacimiento, id_ciudad = :id_ciudad, id_genero = :id_genero WHERE id_usuario = :id_usuario';
$stm = $conexion->prepare($sql_actualizar);

$stm -> bindParam(":nombre",$nombre);
$stm -> bindParam(":apellido",$apellido);
$stm -> bindParam(":correo",$correo);
$stm -> bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm -> bindParam(":id_ciudad",$id_ciudad);
$stm -> bindParam(":id_genero",$id_genero);
$stm -> bindParam(":id_usuario",$id_usuario);
$stm -> execute();

$sql_eliminar = 'DELETE FROM lenguaje_usuario WHERE id_usuario = :id_usuario';
$stm_elimi = $conexion->prepare($sql_eliminar);
$stm_elimi -> bindParam(":id_usuario",$id_usuario);
$stm_elimi -> execute();

$sql_insertar = 'INSERT INTO lenguaje_usuario(id_usuario,id_lenguaje) VALUES (:id_usuario , :id_lenguaje)';
$stm_lenguaje_usuario = $conexion->prepare($sql_insertar);

foreach ($id_lenguaje as $key => $value) {
    $stm_lenguaje_usuario -> bindParam(":id_usuario",$id_usuario);
    $stm_lenguaje_usuario -> bindParam(":id_lenguaje",$value);
    $stm_lenguaje_usuario -> execute();
}
header('location: usuario.php');