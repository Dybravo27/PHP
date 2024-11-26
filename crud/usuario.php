<?php
require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sql_usuario = 'SELECT u.id_usuario, u.nombre, u.apellido, u.correo , u.fecha_nacimiento, g.genero , c.nombre_ciudad
FROM usuarios u INNER JOIN ciudades c ON u.id_ciudad = c.id_ciudad
INNER JOIN generos g ON g.id_genero = u.id_genero ORDER BY u.id_usuario ASC';

$bandera_usuarios = $conexion->prepare($sql_usuario);
$bandera_usuarios -> execute();
$usuarios = $bandera_usuarios->fetchAll();


?>
<table border="3">
    <caption>USUARIOS</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO</th>
            <th>FECHA NACIMIENTO</th>
            <th>CIUDAD</th>
            <th>GENERO</th>
            <th>MODIFICAR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($usuarios as $key => $value) {
        ?>
        <tr>
            <td><?=$value['id_usuario']?></td>
            <td><?=$value['nombre']?></td>
            <td><?=$value['apellido']?></td>
            <td><?=$value['correo']?></td>
            <td><?=$value['fecha_nacimiento']?></td>
            <td><?=$value['genero']?></td>
            <td><?=$value['nombre_ciudad']?></td>
            <td>
                <a href="editar.php? id=<?=$value['id_usuario']?>">Editar</a>
                <a href="eliminar.php? id=<?=$value['id_usuario']?>">Eliminar</a>
            </td>            
        </tr>
        <?php }?>
        
    </tbody>
</table>