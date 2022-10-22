<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero = 169; //Variable con el numero que queremos comprobar

    for($i=1 ; $i <= $numero ; $i++){ //muestra los divisores de un numero
        if($numero % $i == 0){
            echo $i . "<br>";
        }
    }

    

    function esPrimo($numero){
        for ($i=2 ; $i < $numero; $i++){
            if(($numero % $i) == 0){
                return false;//no es primo
            }

        }

        return true;//es primo
    }

    if(esPrimo($numero)){//Si recibe tru Dara el mensaje $numero es primo
        echo "$numero es primo";
    }else{
        echo "$numero no es primo";//Si recibe false dara el mensaje $numero no es primo
    }


    ?>
    
</body>
</html>