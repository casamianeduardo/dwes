<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

if (isset($_POST['envio'])) {//aqui comprobamos si esta definido y no es null
    $idiomaEscogido = $_GET['idioma']; //$idiomaEscogido sera el que seleccionen en la opcion, si no hay ninguno escogido, por defecto español
    switch ($idiomaEscogido) {
        case "castellano":
            echo "hola";
            break;
        case "ingles":
            echo "hello";
            break;
        case "pastel":
            echo "wilkommen kartoffel";
            break;
    }
}
    ?>
</body>

</html>