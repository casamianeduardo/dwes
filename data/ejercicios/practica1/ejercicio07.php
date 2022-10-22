<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $paises = ["Alemania", "Gibraltar", "Korea del Norte", "Italia"];


    echo "<hr> Recorrido por el array mediante bucle foreach simple :<br>";
    foreach ($paises as $element) {
        echo $element . '<br>';
    }

    echo "<hr> Recorrido mediante bucle foreach con posicion->elemento :<br>";
    foreach ($paises as $position => $element) {
        echo $position . ": " . $element . '<br>';
    }



    ?>

</body>

</html>