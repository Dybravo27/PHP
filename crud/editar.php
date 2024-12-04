<link rel="stylesheet" href="style/style.css">
<?php
require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$id_usuario = $_REQUEST['id'];

$sql_editar = 'SELECT * FROM usuarios WHERE id_usuario = :id_usuario';
$stm = $conexion->prepare($sql_editar);
$stm -> bindParam(":id_usuario",$id_usuario);
$stm -> execute();
$usuario= $stm -> fetch();

$sql_ciudad = "SELECT * FROM ciudades";
$bandera = $conexion->prepare($sql_ciudad);
$bandera->execute();
$ciudades = $bandera->fetchAll();

$sql_generos = "SELECT * FROM generos";
$bandera = $conexion->prepare($sql_generos);
$bandera->execute();
$generos = $bandera->fetchAll();

$sql_lenguaje ="SELECT * FROM lenguajes";
$bandera = $conexion->prepare($sql_lenguaje);
$bandera->execute();
$lenguajes = $bandera->fetchAll();

$sql_leng_usu = 'SELECT * FROM lenguaje_usuario WHERE id_usuario = :id_usuario';
$stm = $conexion->prepare($sql_leng_usu);
$stm -> bindParam(":id_usuario",$id_usuario);
$stm -> execute();
$leng_usu = $stm->fetchAll();
?>
<div class="contenedor_formulario">
    <form class="formulario" action="actualizar.php" method="post">
        <fieldset class="formulario__borde">
            <legend class="formulario__contenedor-titulo">
                <h2 class="formulario__titulo">EDITAR DATOS</h2>
            </legend>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="nombre">Nombres</label>
                <input type="hidden" name="id_usuario" value="<?=$id_usuario?>">
                <input class="formulario_input_label__input"s type="text" id="nombre" name="nombre" placeholder="Nombre" required value="<?=$usuario['nombre']?>">
            </div>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="apellido">Apellido</label>
                <input class="formulario_input_label__input" type="text" id="apellido" name="apellido" placeholder="Apellido" required value="<?=$usuario['apellido']?>">
            </div>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="correo">Correo</label>
                <input class="formulario_input_label__input" type="text" id="correo" name="correo" placeholder="Correo" required value="<?=$usuario['correo']?>">
            </div>
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="fecha_nacimiento">Fecha Nacimiento</label>
                <input class="formulario_input_label__input" type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?=$usuario['fecha_nacimiento']?>">
            </div>
    
            <div class="formulario_input_label">
                <label class="formulario_input_label__label" for="id_ciudad">Ciudades</label>
                <select class="formulario_input_label__input" name="id_ciudad" id="id_ciudad">
                    <?php
                    foreach ($ciudades as $key => $value) {
                    ?>
                    <option id="<?=$value['id_ciudad']?>" value="<?= $value['id_ciudad'] ?>" 
                    <?= $usuario['id_ciudad'] === $value['id_ciudad'] ? 'selected' : ''; ?> >
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
                            <input type="radio" name="id_genero" value="<?=$value['id_genero']?>" id="generos<?=$value['id_genero']?>"
                            <?= $usuario['id_genero'] == $value['id_genero'] ? 'checked' : ''; ?>>
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
                            <input type="checkbox" name="id_lenguaje[] " value="<?=$value['id_lenguaje']?>" id="<?=$value['id_lenguaje']?>"
                            <?php
                            foreach ($leng_usu as $key => $value2) {
                                if ($value['id_lenguaje'] == $value2['id_lenguaje']) {
                                    ?>
                                    checked
                                    <?php
                                }
                            }
                            ?>
                            >
                        </label>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="formulario__container-boton">
                <button class="formulario__boton" type="submit">Actualizar Datos</button>
            </div>
        </fieldset>
    </form>
</div>