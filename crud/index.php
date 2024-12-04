<link rel="stylesheet" href="style/style.css">
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

?>
<div class="contenedor_formulario">
    <form class="formulario" action="controlador.php" method="post">
        <fieldset class="formulario__borde">
            <legend class="formulario__contenedor-titulo">
                <h2 class="formulario__titulo">FORMULARIO CRUD</h2>
            </legend>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="nombre">Nombres</label>
                <input class="formulario_input_label__input" type="text" id="nombre" name="nombre" placeholder="Nombre" required autocomplete="off">
            </div>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="apellido">Apellidos</label>
                <input class="formulario_input_label__input" type="text" id="apellido" name="apellido" placeholder="Apellido" required autocomplete="off">
            </div>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="correo">Correo</label>
                <input class="formulario_input_label__input" type="text" id="correo" name="correo" placeholder="Correo" required autocomplete="off">
            </div>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="fecha_nacimiento">Fecha Nacimiento</label>
                <input class="formulario_input_label__input" type="date" id="fecha_nacimiento" name="fecha_nacimiento" required autocomplete="off">
            </div>
    
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="id_ciudad">Ciudades</label>
                <select class="formulario_input_label__input" name="id_ciudad" id="id_ciudad">
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
    
            <div class="formulario_input_label">
                <h3 class="formulario_input_label__titulo">Seleccione su genero:</h3>
                <?php
                 foreach ($generos as $key => $value){
                ?>
                    <div>
                        <label class="formulario_input_label__label"
                         for="generos<?=$value['id_genero']?>"><?= $value['genero'] ?>
                            <input type="radio" name="id_genero" value="<?=$value['id_genero']?>" 
                            id="generos<?=$value['id_genero']?>">
                        </label>
                    </div>
                <?php
                }
                ?>
            </div>
    
            <div class="formulario_input_label">
                <h3 class="formulario_input_label__titulo">Lenguajes en los que se especializa:</h3>
                <?php
                 foreach ($lenguajes as $key => $value){
                ?>
                    <div>
                        <label class="formulario_input_label__label"
                         for="lenguajes<?=$value['id_lenguaje']?>"><?= $value['nombre_lenguaje'] ?>
                            <input type="checkbox" name="id_lenguaje[] " value="<?=$value['id_lenguaje']?>" 
                            id="<?=$value['id_lenguaje']?>">
                        </label>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="formulario__container-boton">
                <button class="formulario__boton" type="submit">Guardar Datos</button>
            </div>
        </fieldset>
    </form>
</div>

