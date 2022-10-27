<?php

    session_start();//para unirte a la sesion, si no estas unido a ella no la puedes destruir

    //destruir la sesion
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(),"", time()-7200,'/');


    //redirigir a login php o mostrar los 2 echo comentados, REDIRECCION, O ECHOS, LAS DOS COSAS NO
    header("Location: login.php");

    //echo "<h2>Cerrando sesion</h2>;
    //echo '<a href="login.php">Pagina de Login</a>';