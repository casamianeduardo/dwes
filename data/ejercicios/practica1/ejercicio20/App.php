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


    public function home(){

        if (isset($_COOKIE['color'])) {
            header('Location: index.php?method=colores');
        } else {
            include('views/colores.php');
        }
    }

    public function cambio()
    {

        $color = $_GET['color'];
        setcookie('color', $color, time() + 60 * 60 * 4);
        header('Location: index.php?method=colores');
    }

    public function colores(){

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
        include('views/home.php');
    }
}
