<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="EjercicioFormu" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
        <!--en el action ponemos la direccion a la quequeremos mandar la informacion del formul -->
        <!-- en formularios SIEMPRE METODO POST, con get mostrarias el usuario y contraseña en la url -->

        <p>
            <label for="nombre">Introduce tu nombre : </label>
            <input type="text" name="nombre" id="nombre"><br>

        </p>



        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>

    <?php

    if (isset($_POST["envio"])) {                       //isset comprueba si una variable está definida y no es null
        if (!empty($_POST["nombre"])) {               //empty comprueba si una variable contiene algún valor distinto de 0 o false
            $nombre = $_POST["nombre"];
            if (strlen($nombre)< 3) {              //strlen cuenta el numero de letras de una cadena
                echo "<br>INCORRECTO tu nombre no puede ser : " . $nombre . " No puede tener menos de 3 caracteres ";
            } else {
                echo "<br>Hola amigo, confirmo que tu nombre es : " . $nombre;
            }
        }
    }
    ?>
</body>

</html>