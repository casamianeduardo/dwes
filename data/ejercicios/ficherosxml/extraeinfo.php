<?php
    $datos = simplexml_load_file("empleados.xml");//lo primero cargar el fichero
    $apellidos = $datos ->xpath("//apellidos");//para sacar los apellidos con xpath del fichero xml
    foreach($apellidos as $apellido){
        echo "<br>Apellido: " ;
        print_r($apellido);
    }