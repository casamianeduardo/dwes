<?php
    $mihost = $_SERVER['HTTP_HOST'];
    echo "<br> El host al que va la peticion es : " .$mihost;
     /*mostrar aqui :
     -el nombre del servidor web
     -el lenguaje
     -el nombre de la pagina actual que realiza la soliticud
     -el tipo de navegador que realiza la soticitud
     */

    $servidorweb = $_SERVER['SERVER_NAME'];

    echo "<br>El servidor web es : " . $_SERVER['SERVER_NAME'];

    echo "<br>El lenguaje / idioma : " . $_SERVER['HTTP_ACCEPT_LANGUAJE'];


    echo "<br>El navegador es : " . $_SERVER['HTTP_USER_AGENT'];
