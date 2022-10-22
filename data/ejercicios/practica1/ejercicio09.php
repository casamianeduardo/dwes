<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $paises = array(); //inicializar el array. esta vacio
    $paises =  []; //inicializar el array. esta vacio

    echo "Array ordenado inicializado elemento por elemento <hr>";
    $paises[0] = "Japon";
    $paises[1] = "Brasil";
    $paises[2] = "Cuba";
    $paises[4] = "España";

    //volcamos la variable para estudiarla y depurar nuestro código. 
    //Con var_dump
    var_dump($paises);

    //O con print_r
    echo "<pre>";
    print_r($paises);
    echo "</pre>";

    //la podemos recorrer con el bucle foreach de dos maneras:
    echo "<hr> Recorrido mediante bucle foreach simple :<br>";
    foreach ($paises as $element) {
        echo $element . '<br>';
    }
    //foreach clave->elemento
    echo "<hr> Recorrido mediante bucle foreach (con posicion->elemento) : <br>";
    foreach ($paises as $position => $element) {
        echo $position . ": " . $element . '<br>';
    }

    ?>

</body>

</html>