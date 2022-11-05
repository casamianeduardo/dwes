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


    public function home(){ //Comprueba si hay una sesion " color".

        session_start();//nos unimos a la sesion para comprobar :

        if (isset($_SESSION['color'])) {//si existe 
            header('Location: index.php?method=colores');//redirigir a metodo colores
        } else {//si no existe:
            include('views/colores.php');//include vista colores
        }
    }

    public function cambio(){//Recibe el color de la página anterior, crea la sesion y reenvia al metodo colores

        $color = $_GET['color'];//guarda en la variable color lo que recibe de $_GET['color']
        session_start();//crea o se une a la sesion
        $_SESSION['color'] = $color;//en la variable de sesion, en un array ['color'] asignamos $color,(lo que recibes de get)
        header('Location: index.php?method=colores');//redirige al metodo colores
    }

    public function colores(){//comprueb la sesion y pone el color de fondo que recibe de ella , include vista home

        session_start();//nos unimos a la sesion para comprobar :

        if (($_SESSION['color']) == "red") {//si en la variable $_SESSION['color'] == red
            echo '<body style="background-color:red">';//poner bacground color red
        }
        if (($_SESSION['color']) == "orange") {
            echo '<body style="background-color:orange">';
        }
        if (($_SESSION['color']) == "yellow") {
            echo '<body style="background-color:yellow">';
        }
        if (($_SESSION['color']) == "blue") {
            echo '<body style="background-color:blue">';
        }
        if (($_SESSION['color']) == "green") {
            echo '<body style="background-color:green">';
        }
        include('views/home.php');//include vista home
    }
}
