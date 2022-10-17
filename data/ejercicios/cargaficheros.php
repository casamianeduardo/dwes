<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>informacion del fichero</h1>
    <?php

    if(isset($_POST["envio"])){
    echo "<br>Nombre del fichero : " .$_FILES["myfile"]["name"];
    echo "<br>Extension/tamaño del fichero : " .$_FILES["myfile"]["type"];
    echo "<br>Tamaño del fichero : " .$_FILES["myfile"]["size"];
    echo "<br>Nombre del fichero temporal : " .$_FILES["myfile"]["tmp_name"];
    
    $destino = "subidos/" .$_FILES["myfile"]["name"];//en esa carpeta(subidos) se guardan todos los archivos que se suban al servidor
    $flag = move_uploaded_file($_FILES["myfile"]["tmp_name"],$destino);// $flag devuelve true si tiene exito, false si no lo tiene

    echo $flag ? "fichero subido correctamente" : "fallo en la subida"; //si es true, devuelve subido correctamente

    }else{
        echo "<p>No has enviado ningun fichero</p>";
    }

    ?>
    
    
</body>
</html>