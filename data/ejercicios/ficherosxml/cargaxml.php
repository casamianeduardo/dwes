<?php
    $datos = simplexml_load_file("empleados.xml");
    if($datos == false){
        echo "<br>No se ha podido leer el xml";
        exit();
    }

    print_r($datos);
    /*
    echo "<br> Recorro el fichero :";
    foreach($datos as $dato){
        print_r($dato);
    }
    */