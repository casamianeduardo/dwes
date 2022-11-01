<?php
//http://localhost/practica1/ejercicio18/  //Enlace para probar la app

class App
{

    public function run() //como funciona:
    {
        if (isset($_GET['method'])) { //si recoge algun method en el $_GET
            $method = $_GET['method']; //lo recoge en la variable metodo
        } else { //Si no recoge nada en el $_GET de method:
            $method = 'login'; //el metodo es el de login, te leva al login
        }

        $this->$method(); //este metodo es el que esta guardado en la variable$method, y en el que "está el usuario"    
    }


    public function login()//login método que muestra formulario de entrada.
    {
      if (isset($_COOKIE['name'])) {//si hay nombre en la cookie:
        header('Location: ?method=home');//redirige al home
        return;
      }//Si no existe nombre en la cookie
      include('views/login.php');//include el login.php
    }


    public function auth() //auth método que toma el nombre de usuario tras el login. Tras hacer esto reenvía a home.
    {
        //recoger datos POST
        if (isset($_POST['name'])) { //si recoge nombre en el $_POST:
            $name = $_POST['name']; //asigna a $name el nombre recogido de $_POST
            $password = $_POST['password']; //aseigna a $password el password recogido de $_POST
        } else { //si no recoge nada del $_POST
            header('Location: ?method=login'); //redirige al metodo de login,que te lleva a login.php
            return;
        }
        //echo "xxxxx"; //al cuerpo del response. Ya no puedo usar header, ningun setcookie,....
        //guardar en cookies el nombre y password
        setcookie('name', $name, time() + 60 * 60 * 2);
        setcookie('password', $password, time() + 60 * 60 * 2);
        //reenviar a "home"
        //le dice al navegador que vaya al home con el metodo home :
        header('Location: index.php?method=home');
    }

    public function home()
    {
        if (!isset($_COOKIE['name'])){//si no existe la cookie de nombre
            header('Location: ?method=login');//redirige al formulario de login
            return;
        }   else{//si existe la cookie de nombre
            $nombre = $_COOKIE['name'];
        }
        include('views/home.php');//include el home.php dnde se muestra el saludo y el enlace a cerrar sesion
        
    }

    public function logout()
    {
        setcookie('name', '',  1);
        setcookie('password', '',  1); //con estas 2 lineas borras las cookies
        header('Location: index.php?method=login'); //y esta te lleva al login,al "haber cerrado la sesion"

    }


}
