<link rel="stylesheet" href="style/style.css">
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
<div class="tabla__contenedor">
    <table class="tabla">
        <caption class="tabla__titulo">USUARIOS</caption>
        <thead class="tabla__cabecera">
            <tr class="tabla__fila">
                <th class="tabla__celda">ID</th>
                <th class="tabla__celda">NOMBRE</th>
                <th class="tabla__celda">APELLIDO</th>
                <th class="tabla__celda">CORREO</th>
                <th class="tabla__celda">FECHA NACIMIENTO</th>
                <th class="tabla__celda">CIUDAD</th>
                <th class="tabla__celda">GENERO</th>
                <th class="tabla__celda">MODIFICAR</th>
            </tr>
        </thead>
        <tbody class="tabla__cuerpo">
            <?php
            foreach ($usuarios as $key => $value) {
            ?>
            <tr class="tabla__fila">
                <td class="tabla__celda"><?=$value['id_usuario']?></td>
                <td class="tabla__celda"><?=$value['nombre']?></td>
                <td class="tabla__celda"><?=$value['apellido']?></td>
                <td class="tabla__celda"><?=$value['correo']?></td>
                <td class="tabla__celda"><?=$value['fecha_nacimiento']?></td>
                <td class="tabla__celda"><?=$value['nombre_ciudad']?></td>
                <td class="tabla__celda"><?=$value['genero']?></td>
                <td class="tabla__celda">
                    <a class="tabla__enlace" href="editar.php? id=<?=$value['id_usuario']?>">Editar</a>
                    <a class="tabla__enlace" href="eliminar.php? id=<?=$value['id_usuario']?>">Eliminar</a>
                </td>            
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
