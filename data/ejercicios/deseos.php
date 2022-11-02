<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        session_start();
        $item = $_POST["lista"];   
        $_SESSION["listadeseo"][] = $item;
        //print_r($_SESSION);
        //print_r($_SESSION["listadeseo"]);
        //echo "<br><br>";
        $sesioncodif = json_encode($_SESSION);
        echo "<br>Sesion codificada<br>";
        print_r($_SESSION["listadeseo"]);

        //opcion 1 para descodificar:decodificarlos como un array, esta es la mas facil de utilizar se supone
        //$sesiondecodif = json_decode($sesioncodif, true);
        //echo "<br><br>";
        //$sesiondecodif["listadeseo"][1] = "coche"; //hacer que la posicion 4 va a ser coche

        //var_dump($sesiondecodif);


        //opcion 2: decodificarlos como un objeto,lo devuelve como un objeto
        $sesiondecodif = json_decode($sesioncodif);
        echo "<br>Sesion DEScodificada : <br>";
        //print_r($sesiondecodif);

        $sesiondecodif->{"listadeseo"}[1] = "lampara";
        //$this->metodo, o atributo del objeto
        print_r($sesiondecodif);

        //opcion 3 :otiene las propiedades de un objeto y las muestra como un array
        $miarray = get_object_vars($sesiondecodif);
        print_r($miarray);
        for ($i = 0; $i < count($miarray, COUNT_RECURSIVE)-1; $i++) { //count recursive se usa cuando hay arrays dentro de arrays
            echo "<br>Elem3ento $i es : " . $miarray["listadeseo"][$i];

        }        

    } //if_post

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