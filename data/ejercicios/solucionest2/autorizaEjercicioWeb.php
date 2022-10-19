<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

if (isset($_POST["envio"])) {//aqui comprobamos si esta definido y no es null
    $idiomaEscogido = $_GET["idioma"]; //$idiomaEscogido sera el que seleccionen en la opcion, si no hay ninguno escogido, por defecto español
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

if (isset($_POST["envio"])) {//aqui comprobamos si esta definido y no es null
    $marcaEscogido = $_GET["marca"]; //$marcaEscogido sera el que seleccionen en la opcion, si no hay ninguno escogido, por defecto español
    switch ($marcaEscogido) {
        case "opel":
            echo "Tu marca favorita es OPEL";
            break;
        case "nissan":
            echo "Tu marca favorita es NISSAN";
            break;
        case "bmw":
            echo "Tu marca favorita es BMW";
            break;
    }
}

    ?>
</body>

</html>