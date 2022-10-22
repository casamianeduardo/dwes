<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $quinteto1 = array(); //inicializar el array. esta vacio
    $quinteto1 =  []; //inicializar el array. esta vacio


    echo "Array ordenado inicializado elemento por elemento <hr>";
    $quinteto1[0] = "Jordan";
    $quinteto1[1] = "O´Neal";
    $quinteto1[2] = "Curry";
    $quinteto1[4] = "Westbrook";
    $quinteto1[] = "Hernangomez";

    //volcamos la variable para estudiarla y estudiar nuestro código. 
    //Con var_dump
    var_dump($quinteto1);

    //O con print_r
    echo "<pre>";
    print_r($quinteto1);
    echo "</pre>";


    //recorrer con for each simple(sin claves/posiciones)
    echo "<hr><ul> Recorrido mediante bucle foreach simple </ul><br>";
    foreach ($quinteto1 as $element) {
        echo "<li>" . $element . '</li><br>';
    }

    //for each que muestra clave=>elemento
    echo "<hr><ul> Recorrido mediante bucle foreach con posicion->elemento </ul><br>";
    foreach ($quinteto1 as $position => $element) {
        echo "<li>" . $position . ": " . $element . '<li><br>';
    }





    ?>

</body>

</html>