<?php

setcookie("cookieidioma",$idiomaEscogido,time()+60*60); //duracion de la cookie 1 minuto*60
setcookie("cookiemarca",$marcaEscogido,time()+60*60);   //duracion de la cookie 1 minuto*60

header('Location: autorizaEjercicioWeb.php');//redireccion