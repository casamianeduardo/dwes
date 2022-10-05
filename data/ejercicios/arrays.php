<?php
    //los elementos son heterogeneos, pueden contener cualquier tipo de dato, incluso objetos

    //funcionan muy parecido a los hasmap (clave - valor) a cada elemento le asigna un valor

    $miarray = array(1,"hola", 3.0 , false);

    echo "<br> Elementos de mi array : " . $miarray[2];

    //mostrar por pantalla un array 3 formas:
        //foreach , var_dump , print_r ;
        foreach($miarray as $elmto){
            echo "<br>el elmto es :" . $elmto;
        }
        echo "<br>";
        print_r($miarray);
        echo"<br>";
        var_dump($miarray);

        echo"<br> longitud del array : " .count($miarray);
        
        
        $array2 = [3,2,5,9];

        foreach($array2 as &$elto){//para pasar el valor por variable
            $elto = $elto * 2;
            echo "<br> valor de elto : " . $elto;
        }
        print_r($array2);

        //para añadir un elemento al array INSERTA SIEMPRE AL FINAL
        $array2 [] = 15;
        echo"<br>";
        print_r($array2);
        echo"<br>";
        //eliminar un elemento
        unset($array2[2]);
        print_r($array2);
        echo"<br> y la posicion 2 ? : " . $array2;

        $array2[] = 99;
        echo"<br>";
        print_r($array2);
        $array2[2]= 13;
        echo"<br>";
        print_r($array2);

        echo"<br>";
        echo"<br> y que contiene la posicion 2 ? :" . $array2[2];

        echo"<br> MOSTRAR CLAVE Y VALOR DE ARRAY: ";
        foreach ($array2 as $key => $value) {
            echo"<br>Clave : " .$key . " y valor: " . $value;
        }

        $mivar = 5;
        unset($mivar);//para eliminar una variable


        //Los indices,las claves del clave - valor solo pueden ser enteros o cadenas

        $persona = array(
            "edad" => 23,
            "peso" => 75,
            "casado" => false,
            "dni" => "75223456",
            8 => "nss"
        );

        foreach ($persona as $key => $value) {
            echo "<br> Clave : " .$key . " y valor: " . $value;
        }
        echo"<br>";
        print_r($persona);


        $persona[] = 7;
        echo"<br>";
        print_r($persona);

        $persona[] = "natacion";
        echo "<br>";
        print_r($persona);

        // para mostrar un elemento del array dni en este caso(al ser cadena entre comillas , si es un entero solo el entero entre [])
        echo "<br> El DNI es" . $persona["dni"];

        //arrays multidimensionales ( o matrices);

        $arrm =[
            0 => [1,3],
            1 => [5,7,9],
        ];

        echo "<br> Debe salir 3 : " .$arrm[0][1];

