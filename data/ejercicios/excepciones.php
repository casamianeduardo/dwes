<?php

    include_once "manejadorexcepcion.php";

//calcula el inverso de un numero pasado como parametro ; Ejemplo: 1 / el numero
function inverso($num){
    if($num == 0){//aqui tratamos el caso de division por cero
        throw new MiExcepcion("No se puede dividir por cero");
    }

    return 1/$num;
}//

try{ 
    echo "<br>El inverso del numero 5 es : " . inverso(5);

}catch(Exception $e){
    echo "<br>La razon de la excepcion es : " .$e->getMessage();
}finally{
    echo "<br>El finally siempre se ejecuta";
}

try{ 
    echo "<br>El inverso del numero 0 es : " . inverso(0);

}catch(MiExcepcion $e){
    echo "<br>La razon de la excepcion es : " .$e->errorPersonalizado();
}finally{
    echo "<br>esto se ejecuta siempre";
}