<?php

    include_once "Asignatura.php";
    include_once "Modulo.php";

    echo "<h1>WEB DE ASIGNATURAS</h1>";
    $bbdd = new Asignatura('BBDD',6);
    echo "<br> " .$bbdd;

    $dews = new Modulo("DWES",9,"IFC301");
    echo "<br>" .$dews;