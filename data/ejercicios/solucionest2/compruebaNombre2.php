<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pagina de chequeo de nombre : </h1>
    <?php

    if (isset($_GET['envio'])) {                       //isset comprueba si una variable está definida y no es null
        if (!empty($_GET['nombre'])) {               //empty comprueba si una variable contiene algún valor distinto de 0 o false
            $nombre = $_GET["nombre"];
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