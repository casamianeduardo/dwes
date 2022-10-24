<?php

// var_dump($_POST);
// exit();
    if(isset($_POST["envio"])){//si esto no esta vacio y la cookie no existe, la creas
        if(!empty($_POST["idioma"]) && !isset($_COOKIE["idioma"])){
            setcookie("idioma" , $_POST["idioma"] , time()+3600);
        }
        if(!empty($_POST["marca"]) && !isset($_COOKIE["marca"])){   
            setcookie("marca" , $_POST["marca"] , time()+3600);
            }

        if(!empty($_POST["idioma"]) && !empty($_POST["marca"])){
            //si no estan vacios redirige a la pagina visualizaopciones.php
            header("Location: visualizaopciones.php");
            exit();
        }

    }else{//borra las cookies y redirige a idioma.html(como medida de seguridad )
        setcookie("idioma",'',time()-7200);
        setcookie("marca",'',time()-7200);
        header("Location: idioma.html");
        exit();
    }

    ?>
