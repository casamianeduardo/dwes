<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $quinteto = ["Jordan", "Gasol", "Lebron", "Kobe", "Iverson"];
    $quinteto = array("Jordan", "Gasol", "Lebron", "Kobe", "Iverson");

    //recorrer con el bucle foreach simple:
echo "<hr><ul> Quinteto : (solo nombres) </ul><br>";
foreach ($quinteto as $element){
    echo "<li>" .$element . '</li><br>';
}

//recorrer con el bucle foreach clave->elemento
echo "<hr><ul> Quinteto : (con posicion=>elemento) </ul><br>";
foreach ($quinteto as $position=>$element){
    echo "<li>" . $position . ": " . $element . '</li><br>';
}


    ?>

</body>

</html>