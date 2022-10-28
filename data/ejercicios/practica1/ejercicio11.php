<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Formulario</h2>

    <form name="login" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
        <!--en el action ese codigo php q significa que se comprueba contra si misma -->
        <!-- en formularios SIEMPRE METODO POST, con get mostrarias el usuario y contraseña en la url -->

        <p>
            <label for="titulo">Introduce TITULO DEL LIBRO: </label>
            <input type="text" name="titulo" id="titulo"><br>
            <label for="autor">Introduce AUTOR DEL LIBRO: </label>
            <input type="text" name="autor" id="autor"><br>
            <label for="editorial">Introduce EDITORIAL DEL LIBRO: </label>
            <input type="text" name="editorial" id="editorial"><br>
            <label for="paginas">Introduce PAGINAS DEL LIBRO: </label>
            <input type="text" name="paginas" id="paginas"><br>
        </p>

        <input type="submit" name="envio" id="envio" value="Enviar Datos">

    </form>

    <?php
    if (isset($_POST) && !empty($_POST)) {
        echo "<hr><pre>";
        var_dump($_POST);
    } else {
        echo "No nos has dado informacion sobre ningun libro!";
    }

    ?>

</body>

</html>