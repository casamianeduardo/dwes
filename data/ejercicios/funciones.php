<?php

//globales

$var1 = 6;
$var2 = 7;

//para borrar una variable unset($var2);

function suma($a,$b){
    global $var1;
    global $var2;
    $var1 = 99;
    $var2 = 100;
    echo "<br>La variable dentro de la funcion var1 y var2 son : " . $var1 . " y " . $var2;
    
    //definicion de variables estatica
    static $varestatica = 0;
    echo "<br>El valor de la var estatica es : " .$varestatica;
    $varestatica++;
    
    return $a + $b;
    
}

echo "<br>La variable a y b son : " .$a . " y " .$b;

echo "<br>La variables var1 y var2 son : " . $var1 . "y" . $var2;
echo "<br>La suma es : " . suma(3,5);

echo"<br> LLamada a suma 1 vez : " . suma(3,5);
echo"<br> LLamada a suma 2 vez : " . suma(3,5);
echo"<br> LLamada a suma 3 vez : " . suma(3,5);


//el ambito de las variables es donde las defines
//para poder usar una variables global en una funcion , hay que vovler a definirlas como global dentro de la funcion
//La variable estatica no pierde el valor al salir de la funcion



