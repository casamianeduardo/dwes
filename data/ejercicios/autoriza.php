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
        if (!empty($_GET['nombreusu'])  ){
        $usuario = $_GET ['nombreusu'];
        echo "<br>Usuario introducido : " . $usuario;
    }else{
     echo "<br><h3>No has introducido ningun usuario</h3>";
         }
    }

    if(isset($_GET['passwd'])) {
        if (!empty($_GET['nombreusu'])  ){
        $passwd = $_GET ['passwd'];
        echo "<br>Pass introducida : " . $passwd;
    }else{
     echo "<br><h3>No has introducido ninguna contraseña</h3>";
         }
    }


    //Recodida valores checkbox

    if(isset($_GET['envio']))   {
        if(!empty($_GET['asignaturas'])){
            $asignaturas = $_GET['asignaturas'];
            foreach($asignaturas as $asignatura){
                echo "<br> Te encanta el leng programacion : " .$asignatura;
            }
        }else{
            echo "<br> No te gusta la programacion";
        }
    }


    //recogida datos RadioButton
    if(isset($_GET["envio"])){
        $equipobasket = $_GET["equipo"];
        if(!empty($equipobasket)){
            echo "<br> Tuequipo de basket favorito es : " . $equipobasket;
        }else{
            echo "<br>No has elegido ningun equipo";
        }
    }

    //recodiga de listas desplegables
    if(isset($_GET["envio"])){
        $menupreferido = $_GET["menus"];
        if(!empty($menupreferido)){
            echo "<br> Tu plato favorito es : " . $menupreferido;
        }else{
            echo "<br>No has elegido ningun menu";
        }
    }

    //recodiga de listas desplegables con multiples opciones
    if(isset($_GET["envio"])){
        $menupreferidos = $_GET["menusm"];
        if(!empty($menupreferidos)){
            foreach($menupreferidos as $menu)
            echo "<br> Tu platos favoritos son : " . $menu;
        }else{
            echo "<br>No has elegido ningun menu";
        }
    }

    //recogida de datos del campo php hidden
    if(isset($_GET["envio"])){
        $ip = $_GET["ip"];
        if(!empty($ip)){
            echo "<br> La ip del servidor es : " . $ip;
        }else{
            echo "<br>No has podido averiguar la ip del servidor";
        }
    }

    ?>
</body>
</html>