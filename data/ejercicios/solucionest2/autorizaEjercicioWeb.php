<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

if (isset($_COOKIE["cookieidioma"])) {//aqui comprobamos si esta definido y no es null
    $idiomaEscogido = $_COOKIE["cookieidioma"]; //$idiomaEscogido sera el que seleccionen en la opcion, si no hay ninguno escogido, por defecto español
    switch ($idiomaEscogido) {
        case "castellano":
            echo "Bienvenido querido usuario.";
            break;
        case "ingles":
            echo "Welcome dear user.";
            break;
        case "aleman":
            echo "Willkommen Sehr geerhter Nutzer.";
            break;
    }
}

if (isset($_COOKIE["cookiemarca"])) {//aqui comprobamos si esta definido y no es null
    $marcaEscogido = $_COOKIE["cookiemarca"]; //$marcaEscogido sera el que seleccionen en la opcion, si no hay ninguno escogido, por defecto español
    switch ($marcaEscogido) {
        case "opel":
            echo "<br>Tu marca favorita es OPEL";
            break;
        case "nissan":
            echo "<br>Tu marca favorita es NISSAN";
            break;
        case "bmw":
            echo "<br>Tu marca favorita es BMW";
            break;
    }
}

    

    ?>
</body>

</html>