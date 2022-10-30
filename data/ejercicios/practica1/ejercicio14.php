<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="EjercicioCalcu" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
<!--en el action ponemos la direccion a la quequeremos mandar la informacion del formul -->
        <!-- en formularios SIEMPRE METODO POST, con get mostrarias el usuario y contraseña en la url -->
        <h1>CALCULADORA</h1>
        <p>
            <label for="num1">Introduce num1 : </label>
            <input type="text" name="num1" id="num1"><br>

            <select name="operacion" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <label for="num2"><br>Introduce num2 : </label>
            <input type="text" name="num2" id="num2"><br>

        </p>

        <input type="submit" name="envio" id="envio" value="Hacer operacion">

        </form>
        <?php

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        if (is_numeric($_POST["num1"]) !="" and is_numeric($_POST["num2"]) !=""){//si lo recibido en $_POST[num1] y $_POST[num2], SON NUMEROS y NO ESTA VACIO :
            if( $operacion == "+"){//y $operacion es +
                $resultado = $num1 + $num2;
            }else if($operacion == "-"){
                $resultado = $num1 - $num2;
            }else if($operacion == "*"){
                $resultado = $num1 * $num2;
            }else if($operacion == "/" and $num2 != "0"){//tratamos que el num2 no sea 0, No es posible dividir por 0 y si lo hacemos saltara ua excepcion
                $resultado = $num1 / $num2;
            }
            echo "El resultado es : " . $resultado;
        }else{//si lo recibido en $_POST[num1] y o $_POST[num2], NO ES UN NUMERO o ESTA VACIO, mostraremos un enlace poara volver a la calculadora :
            
            echo " <a href='http://localhost/practica1/ejercicio14.php'>Volver a calculadora</a> ";
        }
            

        
     
        

        ?>
</form>
    
</body>
</html>