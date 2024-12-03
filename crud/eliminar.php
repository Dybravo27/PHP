<?php

require('conexion.php');
$db = new Conexion();
$conexion = $db->getConexion();

$id_usuario_eliminar = $_GET['id'];
if (!$id_usuario_eliminar) {
    die('Error  id no proporcionado');
}

$sql_eliminar_lenguaje = 'DELETE FROM lenguaje_usuario WHERE id_usuario = :id_usuario';
$stm =  $conexion -> prepare($sql_eliminar_lenguaje);
$stm -> bindParam(":id_usuario",$id_usuario_eliminar);
$stm-> execute();

$sql_eliminar ='DELETE FROM usuarios WHERE id_usuario = :id_usuario';
$stm =  $conexion -> prepare($sql_eliminar);
$stm -> bindParam(":id_usuario",$id_usuario_eliminar);

if ($stm-> execute()) {
    header('Location: usuario.php');
    exit();
}
else {
    die('Error al eliminar el registro');
}