<link rel="stylesheet" href="style.css">
<?php


require('conexion.php');

$db ="";
$conexion ="";

$db = new Conexion();
$conexion = $db->getConexion();

$sql = "SELECT * FROM ciudades";// consulta para las ciudades
$sql_generos = "SELECT * FROM generos";// consulta para los generos
$sql_lenguajes ="SELECT * FROM lenguajes";// consulta para los lenguajes
// preparar los datos para las ciudades
$bandera = $conexion->prepare($sql);
$bandera->execute();
$ciudades = $bandera->fetchAll();
// preparar los datos para los generos
$bandera_generos = $conexion->prepare($sql_generos);
$bandera_generos->execute();
$generos = $bandera_generos->fetchAll();
// preparar los datos para los lenguajes
$bandera_lenguajes = $conexion->prepare($sql_lenguajes);
$bandera_lenguajes->execute();
$lenguajes = $bandera_lenguajes->fetchAll();

// echo "<pre>";
// print_r($ciudades);
// echo "</pre>";


// echo "<pre>";
// print_r($generos);
// echo "</pre>";

?>
<form action="controlador.php" method="post">
    <fieldset>
        <legend>Conexion PHP a MySQL</legend>
        <div>
            <label for="nombre">Nombres</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido">
        </div>
        <div>
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo" placeholder="Correo">
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha">
        </div>

        <div>
            <label for="id_ciudad">Ciudades</label>
            <select name="id_ciudad" id="id_ciudad">
                <?php
                foreach ($ciudades as $key => $value) {
                ?>
                <option id="<?=$value['id_ciudad']?>" value="<?= $value['id_ciudad'] ?>">
                    <?= $value['nombre_ciudad'] ?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div>
            <h3>Genero</h3>
            <?php
             foreach ($generos as $key => $value){
            ?>
                <div>
                    <label for="generos<?=$value['id_genero']?>"><?= $value['genero'] ?>
                        <input type="radio" name="id_genero" value="<?=$value['id_genero']?>" 
                        id="generos<?=$value['id_genero']?>">
                    </label>
                </div>
            <?php
            }
            ?>
        </div>

        <div>
            <h3>Lenguajes</h3>
            <?php
             foreach ($lenguajes as $key => $value){
            ?>
                <div>
                    <label for="lenguajes<?=$value['id_lenguaje']?>"><?= $value['nombre_lenguaje'] ?>
                        <input type="checkbox" name="id_lenguaje[] " value="<?=$value['id_lenguaje']?>" 
                        id="<?=$value['id_lenguaje']?>">
                    </label>
                </div>
            <?php
            }
            ?>
        </div>
        <button type="submit">Guardar Datos</button>
    </fieldset>
</form>

