<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num = 8;//variable global ,aqui poner el numero del que quieres la tabla de multiplicar
    $multiplicador;//variable que se ira incrementando, (el numero por el que multplicamos)

    for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++){

        echo "$num" . " * " . $multiplicador . " = " . $num * $multiplicador;
        echo "<br>";
    }

    ?>
    
</body>
</html>