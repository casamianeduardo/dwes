<?php
    //Crear una sesion,  o unirse a una sesion ya creada
    session_start();

    //$_SESSION["NOMBRE_VARIABLE"]
    //contador visitas

    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"] = 0;
    }else{
        $_SESSION["contador"]++;
    }

    $_SESSION["producto"] = "cortacesped";

    echo "He visitado la pagina " .$_SESSION["contador"] . " veces.";

    echo "<a href=\"sesion2.php\">Siguiente Pagina</a>";