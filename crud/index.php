<?php


require('conexion.php');

$db ="";
$conexion ="";

$db = new Conexion();
$conexion = $db->getConexion();

$sql = "SELECT * FROM ciudades";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$ciudades = $bandera->fetchAll();

echo "<pre>";
print_r($ciudades);
echo "</pre>";

?>
<form action="" method="post">
    <div>
        <label for="id_ciudad">CIUDAD</label>
        <select name="id_ciudad" id="id_ciudad">
            <?php
            foreach ($ciudades as $key => $value) {
            ?>
            <option id="<?=$value['id_ciudad']?>">
                <?= $value['nombre_ciudad'] ?>
            </option>
            <?php
            }
            ?>
        </select>
    </div>
</form>
