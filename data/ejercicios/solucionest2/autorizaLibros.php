<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de chequeo de credenciales de libro : </h1>
    <h2>Datos introducidos</h2>
    <?php

    if(isset($_GET['envio'])) {
        if (!empty($_GET['titulo'])  ){
        $titulo = $_GET ['titulo'];
        echo "<br>Titulo introducido : " . $titulo;
    }else{
     echo "<br><h3>No has introducido ningun titulo</h3>";
         }
    }

    if(isset($_GET['envio'])) {
        if (!empty($_GET['autor'])  ){
        $autor = $_GET ['autor'];
        echo "<br>Autor introducido : " . $autor;
    }else{
     echo "<br><h3>No has introducido ningun autor</h3>";
         }
    }

    if(isset($_GET['envio'])) {
        if (!empty($_GET['editorial'])  ){
        $editorial = $_GET ['editorial'];
        echo "<br>Editorial introducido : " . $editorial;
    }else{
     echo "<br><h3>No has introducido ninguna editorial</h3>";
         }
    }

    if(isset($_GET['envio'])) {
        if (!empty($_GET['paginas'])  ){
        $paginas = $_GET ['paginas'];
        echo "<br>paginas introducido : " . $paginas;
    }else{
     echo "<br><h3>No has introducido ninguna paginas</h3>";
         }
    }

    
    ?>
</body>
</html>