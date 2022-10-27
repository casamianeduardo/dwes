<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"]))  {
            session_start();
            $item = $_POST["lista"];
            $_SESSION["listadeseo"][] = $item;
            //echo "<br><br>";
            $sesioncodif = json_encode($_SESSION);
            var_dump($sesioncodif);
            
            //opcion 1 para descodificar:decodificarlos como un array
            $sesiondecodif = json_decode($sesioncodif,true);
            echo "<br><br>";
            //var_dump($sesiondecodif);


            //opcion 2: decodificarlos como un objeto
            $sesiondecodif = json_decode($sesioncodif);

            //cambiar el elemento 2 a 


        }//if_post

    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Elige tu deseo</h2>
    <h3>hoy voy a comprar...</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <select name="lista" id="lista" required>
    <option value="camisa">camisa</option>
    <option value="cortacesped">cortacesped</option>
    <option value="consola">consola</option>
    <option value="colonia">colonia</option>
    <option value="coche">coche</option>
    <option value="portatil">portatil</option>
    <option value="movil">movil</option>
    </select>
    <br><br>
    <input type="submit" name="envio" id="envio" value="Agregar deseo">
    </form>


</body>

</html>