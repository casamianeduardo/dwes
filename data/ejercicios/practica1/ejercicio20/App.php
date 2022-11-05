<?php


class App{

    public function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }

        $this->$method();
    }


    public function home(){ //Comprueba si hay una cookie llamada "color".

        if (isset($_COOKIE['color'])) {//si la cokie color existe:
            header('Location: index.php?method=colores');//redirigir a metodo colores
        } else {//si cookie color no existe:
            include('views/colores.php');//include vista colores
        }
    }

    public function cambio(){//Recibe el color de la página anterior, crea la cookie y reenvia al metodo colores

        $color = $_GET['color'];//guarda en la variable color lo que recibe de $_GET['color']
        setcookie('color', $color, time() + 60 * 60 * 4);//establecer cookie
        header('Location: index.php?method=colores');//redirige al metodo colores
    }

    public function colores(){//comprueb la cookie color y pone el color de fondo que recibe en ella , include vista home

        if (($_COOKIE['color']) == "red") {
            echo '<body style="background-color:red">';
        }
        if (($_COOKIE['color']) == "orange") {
            echo '<body style="background-color:orange">';
        }
        if (($_COOKIE['color']) == "yellow") {
            echo '<body style="background-color:yellow">';
        }
        if (($_COOKIE['color']) == "blue") {
            echo '<body style="background-color:blue">';
        }
        if (($_COOKIE['color']) == "green") {
            echo '<body style="background-color:green">';
        }
        include('views/home.php');//include vista home
    }
}
