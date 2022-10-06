<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de chequeo de credenciales : </h1>
    <h2>Si has llegado aqui eres un heroe</h2>
    <?php

    if(isset($_GET['envio'])) {
        if (!empty($_GET['titulo'])  ){
        $titulo = $_GET ['titulo'];
        echo "<br>Titulo introducido : " . $titulo;
    }else{
     echo "<br><h3>No has introducido ningun titulo</h3>";
         }
    }
    ?>
</body>
</html>