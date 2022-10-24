<?php
session_start();//creo o me uno a la sesion 

//estas tres lineas para eliminar la sesion y la cookie de sesion
$_SESSION = array();
session_destroy();
setcookie(session_name(),'',time()-7200,'/');

//al destruir la sesion esto no deberia tener valores
echo "La pagina se ha cargado " . $_SESSION["contador"] . " veces.<br>" ;

echo "Producto :" . $_SESSION["producto"];