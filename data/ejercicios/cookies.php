<?php

//time() = strtotime(now()); 
//epoch time(epoch converter.com), tiempo en segundos desde 1970 = strtotime()

$miarray = ['a'=>"hola",'b'=>25,'c'=>[1,3,5]];
$infoguardar = serialize($miarray);//Devuelve una cadena 

$infojson = json_encode($miarray);
echo "<br>Codificacion del array en json: " . $infojson;

$micad = '{"a":"hola","b":10}' ;
var_dump(json_decode($micad));




//definir una cookie
//setcookie("primeracookie",$infoguardar,time()+60); //duracion de la cookie 1 minuto
//setcookie("segundacookie",$infojson,time()+60);

 //las cookies se almacenan en un array asociativo, que contiene la informacion de las cookies

/*borrar una cookie(ponerle tiempo negativo)
setcookie("primeracookie","aceptado",time()-120);
*/

echo "<h1>Mi primera cookie</h1>";
//las cookies siempre antes de mostrar nada por pantalla, ya que van en la cabecera, sino cascas todo

    $miarray = ["hola",25,[1,3,5]];
    $infoguardar = serialize($miarray);//Devuelve una cadena 

echo "<br>Valor de la cookie 1 : " . $_COOKIE["primeracookie"];
echo "<pre>";
echo "<br>Valor de cookie 2: ";
var_dump($infojson);
//var_dump(unserialize($_COOKIE["segundacookie"])); 

echo "<br>Numero de cookies creadas " .count($_COOKIE);