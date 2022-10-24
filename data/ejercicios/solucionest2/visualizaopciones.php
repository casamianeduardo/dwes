<?php
if (isset($_COOKIE["idioma"]) && isset($_COOKIE["marca"])) {
    $idioma = $_COOKIE["idioma"];
    $marca = $_COOKIE["marca"];

    $mensajeidioma = "";
    $mensajecoche = "";
    switch ($idioma) {
        case "castellano":
            $mensajeidioma = "Bienvenido querido usuario";
            $mensajecoche = "Tu marca de coche favorita es : ";
            break;
        case "ingles":
            $mensajeidioma = "Welcome dear user";
            $mensajecoche = "Your fauvorite car is : ";
            break;
        case "aleman":
            $mensajeidioma = "Willkommen Sehr geerhter Nutzer";
            $mensajecoche = "Ihre liebensautomarkke ist : ";
            break;
        default:
            $mensajeidioma = "Bienvenido querido usuario";
            $mensajecoche = "Tu marca de coche favorita es : ";
            break;
    }

    $mensajecoche = $mensajecoche . $marca;

    echo "<h2>" . $mensajeidioma . "</h2>";
    echo "<h2>" . $mensajecoche . "</h2>";

}else{//si cargo la pagina y no existen cookis

    echo "<h3>Debe seleccionar algunos datos</h3>";
    echo "<a href=\"idioma.html\">Volver al inicio</a>";
    
}
