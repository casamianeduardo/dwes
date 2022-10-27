<?php

    session_start();//para univrme a la sesion
    
    if(!isset($_SESSION["loginok"])){//para que nadie cargue principal , sin hacer login ejn login.php
        header("Location: login.php");
    }


    //var_dump($_SESSION["loginok"]);
    echo"<h2>Bienvenido usuario : </h2>" . $_SESSION["loginok"]["nombreusu"];
    echo"<h2>El valor de tu rol es : </h2>" . $_SESSION["loginok"]["rol"];

    echo "<br><a href=\"logout.php\">Cerrar  Sesion</a>";