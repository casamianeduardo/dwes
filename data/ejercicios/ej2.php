<?php
//comentario de una linea
/*
varias lineas
*/

echo "SOY UN FICHERO PHP PURO";
$var1 = 5;
$var2 = "7";
$var3 = (int)"7"; /* conviertes la var3 en entero */

$var4 = (string)8; /* conviertes el 8 en cadena */

$numeroPrimo = 3;

echo "<br>$var1 es del tipo : " . gettype($var1); //para concatenar espacio . espacio

$var4 = "";
$var5;

echo "la variable 3 esta inicializada? " .isset($var3) . "<br>";
echo "la variables 5 esta iniciliciada? " . isset($var5) . "<br>";

echo "la variables 4 esta vacia? " . empty($var4) . "<br>";
echo "la variables 5 esta vacia? " . empty($var5) . "<br>"; //sino existe la variable,o es una cadena vacia, o el resultado es cero tambien dará true 1.
echo "la variables 6 esta vacia? " . empty($var6) . "<br>";

const MICONST = 100; // constantes NO SE PONE DOLAR

echo "<br> la constante es " . MICONST;

$num1 = 3;
$num2 = 7;

if($num1 == $num2){
    echo "<br> Son iguales";
}else{
    echo "<br> Son diferentes"; 
}

if($num1 === $num1){
    echo "<br> Son iguales";
}else{
    echo "<br> Son diferentes"; 
}





/*
VARIABLES[A-Z,a-z,0-9]
    las variables: no pueden comenzar con numeros ni caracteres especiales
    el unico caracter permitido es _
    _$ no debe usarse porque es para variables predefinidas del lenguaje.

    Notacion de las variables: Camel Case    $numeroPrimo = 3;

    Casesensitive :
     Java -> SI (distingue mayusculas de minusculas en variables)
     PHP -> a medias:
        -Las variables si
            $mivariable DISTINTO DE $Mivraiable

        -los metodos -> no
             metodo1 =METODO1

   




    -----------------
    TIPOS DE DATOS:
    simples : int , string, boolean, float
    complejos: arrays, objetos, ficheros

    Tipado de lenguaje programacion:
    Fuerte: JAVA ejemplo --- int var1 = 5;
    Debil: PHP ejemplo --- $var10 = 5;

    metodo  gettype(); para saber de que tipo es una variable



    OPERADORES
    =========

    = , < , > ... , != , <> , == , === , <=>

    === chequea que sea el mismo dato y el mismo tipo de dato


    if(){} ; if(){}else{}

    if(){

    }elseif{

    }else{

    }

    while(){}  ; do{}while();

    for($i = 0 ; $i<10 ; $i++){
        $miarray[$i]
    }

    foreach($array as $elmto){

    }


    Inclusion de codigo de un fichero en otro:
    include , include_once , require , require_once ;

    include: sirve para incrustar codigo de una pagina en otra/s : Ejemplo foother.php y misitio.php
    include_once solo incluira una vez el include

    require es lo mismo que include, pero si no encuentra lo que quieres incluir para la ejecucion de la pagina
    require_once es lo mismo que include once pero si no encuentra lo que quieres incluir para la ejecucion de la pagina



*/
