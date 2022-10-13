<?php

$nombrefich= "modulodwes.txt";
$fp = fopen($nombrefich,"r");//devuelve true si no hay problemas

if(!$fp){
    echo "<br>No he podido leer el fichero";
}else{
    //leer el fichero.
        //1 - caracter a caracter: funcion fgetc
       /* while(!feof($fp)){
            $caracter = fgetc($fp);
            if($caracter == "\n"){//en este if hacemos esto para que salgan bien los saltos de linea
                echo "<br>";
            }
            echo $caracter;
        }
}
*/

// 2 - Leyendo linea a linea
    /*
    while(!feof($fp)){
        $linea = fgets($fp);
        echo $linea . "<br>";
    }
}*/

    //3 - fread()
   $contenido = fread($fp,filesize($nombrefich));//se le pasa por parametros el fichero, y filesize para leer todo el fichero, si pones un numero, lee ese numero de bytes
    print_r($contenido);
}

echo "<br>Cerrando el fichero...";
fclose($fp);//Cerrar el fichero, muy importante siempre que abres un fichero.

$fp = fopen($nombrefich,"a");// "a" escribir al final del fichero , true si no hay problemas
fwrite($fp,"Esta es otra linea." . PHP_EOL);//PHP_EOL ES PARA PONER SALTO DE LINEA
fclose($fp);

