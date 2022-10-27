<?php
//usuario : 1234
//admis 4567
function comprobarcredenciales($nombreusu, $clave)
{
    if ($nombreusu === "usuario" && $clave === "1234") {
        $credenciales["nombreusu"] = "usuario";
        $credenciales["rol"] = 0;
        return $credenciales;
    }
    if ($nombreusu === "admin" && $clave === "4567") {
        $credenciales["nombreusu"] = "admin";
        $credenciales["rol"] = 1;
        return $credenciales;
    }
    return false;
} //funcion

if ($_SERVER["REQUEST_METHOD"] === "POST") { //para asegurarte que viene del post , y no cargan directamete la pagina
    if (isset($_POST["envio"])) {
        $credentials = comprobarcredenciales($_POST["nombreusu"], $_POST["passwd"]);
        if ($credentials === false) {
            $error = 1;
        } else {
            //si credenciales validas :
            session_start();
            $_SESSION["loginok"] = $credentials;
            header("Location: principal.php");
        }
    }
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
    <?php
    if (isset($error) && $error == 1) {
        echo "<p> Credenciales invalidas</p>";
    }

    ?>

    <form name="login" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
        <!--en el action ese codigo php q significa que se comprueba contra si misma -->
        <!-- en formularios SIEMPRE METODO POST, con get mostrarias el usuario y contraseña en la url -->

        <p>
            <label for="nombre">Introduce NOMBRE DE USUARIO: </label>
            <input type="text" name="nombreusu" id="nombreusu">
        </p>
        <p>
            <label for="password">Introduce la contraseña</label>
            <input type="password" name="passwd" id="passwd">

        </p>

        <input type="submit" name="envio" id="envio" value="Acceder">
    </form>
    
</body>

</html>