<?php

    include_once "Asignatura.php";
    include_once "Modulo.php";

    echo "<h1>WEB DE ASIGNATURAS</h1>";
    $bbdd = new Asignatura('BBDD',6);
    Asignatura::setCiclo("DAM");
    echo "<br> " .$bbdd;
    echo "<br> BBDD pertenece al ciclo " . Asignatura::getCiclo();

    $dews = new Modulo("DWES",9,"IFC301");
    echo "<br>" .$dews;
    Modulo::setCiclo("DAW");
    echo "<br> DWES pertenece al ciclo " . Modulo::getCiclo();
