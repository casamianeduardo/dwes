<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = "Eduardo";
    $apellido = "Casamian";
    $edad = "31";
    $telefono = "666666666";
    $email = "Eduardo@gmail.com";

    echo "<table>";
echo "<tr>";
echo "  <th> Nombre  </th>";
echo "  <th> Apellido </th>";
echo "  <th> Edad  </th>";
echo "  <th> Telefono  </th>";
echo "  <th> Email  </th>";
echo "</tr>";
echo "<tr>";
echo "<td> " . $nombre . "</td>";
echo "<td> " . $apellido . "</td>";
echo "<td> " . $edad . "</td>";
echo "<td> " . $telefono . "</td>";
echo "<td> " . $email . "</td>";
echo "</tr>";
echo "</table>";
echo "<br>";

    echo 'Nombre: ' . $nombre . '<br>';
    print 'Apellido: ' . $apellido . '<br>';
    echo 'Edad: ' . $edad . '<br>';
    print 'Telefono: ' . $telefono . '<br>';
    echo 'Email: ' . $email . '<br>';

    echo '<br>';

    echo  "Mi nombre es : $nombre <br>";
    print "Mi apellido es : $apellido <br>";
    echo 'Mi edad es : ' . $edad . '<br>';
    print 'Mi telefono es : ' . $telefono . '<br>';
    echo  "Mi email es : $email <br>";

    


    ?>
</body>
</html>