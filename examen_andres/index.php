<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Andres">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script language="javascript" src="./scripts.js"></script>
</head>

<body>
    <?php include "conexion.php"; ?>
    <div class="header">
        <h1>Examen No. 1</h1>
        <h2>Diseño de Comportamientos Interactivos III</h2>
    </div>

    <div class="contenedor1">
        <button type="button" onclick="mostrarFoto3()" class="b1">Mostrar foto</button>
        <button type="button" onclick="ocultarFoto3()" class="b1">Ocultar foto</button>
        <img src="imgs/foto1.jpg" class="foto" id="foto">
    </div>

    <div class="contenedor2">
        Ingrese su teléfono (10 números):
        <br><br>
        <form>
            <input type="text" class="c1" placeholder="Ingrese su Telefono" id="telefono" />
            <br><br>
            <button type="button" class="b1" onclick="validarTelefono3()">Validar</button>
        </form>
        <br>
        <div class="msg" id="msg"></div>

    </div>

    <div class="contenedor3">
        Desplegar los registros que inician con la letra:
        <br><br>
        <form method="post" action="index.php">
            <input type="text" name="letra" maxlength="1" class="c2" placeholder="letra" />
            <button type="submit" class="b1">Buscar</button>
            <?php
            //checamos si se ha enviado un querystring a la página o el formulario con una búsqueda
            if (isset($_REQUEST["letra"])) {
                $letraParaBuscar = $_REQUEST["letra"];

                //buscamos los apellidos que inician con la letra seleccionada
                $sql = "select idDirectorio, nombre, apellido, email from andres_directorio where apellido like '" . $letraParaBuscar . "%' order by apellido";
                $rs = ejecutar($sql);
            } else if (isset($_POST["busqueda"])) {
                $registroParaBuscar = $_POST["busqueda"];

                $sql = "select idDirectorio, nombre, apellido, email from andres_directorio where apellido like '%" . $registroParaBuscar . "%' order by apellido";
                $rs = ejecutar($sql);
            }
            ?>

        </form>
        <br><br>
        <?php
        //aqui va el código PHP para buscar y desplegar resultados

        ?>


    </div>

</body>

</html>