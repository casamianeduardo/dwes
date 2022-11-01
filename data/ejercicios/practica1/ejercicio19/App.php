<?php
//http://localhost/practica1/ejercicio19/  //Enlace para probar la app
class App{
    public function run()//como funciona:
    {
      if (isset($_GET['method'])) {//si recoge algun method en el $_GET
        $method = $_GET['method'];//lo recoge en la variable metodo
      } else {//Si no recoge nada en el $_GET de method:
        $method = 'login';//el metodo es el de login, te leva al login
      }
    
      $this->$method();//este metodo es el que esta guardado en la variable$method, y en el que "está el usuario"    
    }

    public function login()//login método que muestra formulario de entrada.
    {
      if (isset($_COOKIE['name'])) {//si hay nombre en la cookie:
        header('Location: ?method=home');//redirige al home
        return;
      }//Si no existe nombre en la cookie
      include('views/login.php');//include el login.php
    }

    public function auth()//auth método que toma el nombre de usuario tras el login. Tras hacer esto reenvía a home.
    {
      //recoger datos POST
      if (isset($_POST['name'])) {//si recoge nombre en el $_POST:
        $name = $_POST['name'];//asigna a $name el nombre recogido de $_POST
        $password = $_POST['password'];//aseigna a $password el password recogido de $_POST
      } else {//si no recoge nada del $_POST
        header('Location: ?method=login');//redirige al metodo de login,que te lleva a login.php
        return;
      }
      //echo "xxxxx"; //al cuerpo del response. Ya no puedo usar header, ningun setcookie,....
      //guardar en cookies el nombre y password
      setcookie('name', $name, time() + 60*60*2);
      setcookie('password', $password, time() + 60*60*2);
      //reenviar a "home"
      //le dice al navegador que vaya al home con el metodo home :
      header('Location: index.php?method=home');
    }
    public function home()//este metodo muestra tu lista de deseos
    {
      if (!isset($_COOKIE['name'])) {//si no existe la cookie de nombre
        header('Location: ?method=login');//redirige al formulario de login
        return;
      }
      if (isset($_COOKIE['deseos'])) {//si existe la cookie deseos:
        $deseos = unserialize($_COOKIE['deseos']);//la decoodifica
      } else {//si existe cookie de nombre:
        // $deseos = array();
        $deseos = [];//la lista de deseos es un array vacio,esta vacia
      }
      include('views/home.php');//include el home.php dnde se muestra tu lista de deseos
    }

    public function new()//new toma el nuevo deseo y lo incluye en la lista.
  {
    if (!isset($_POST['new'])) {//si no recoge nada de new
      header('Location: index.php?method=home');//redirige a home donde saldran tus deseos
      return;
    }
    $new = $_POST['new'];//recoge lo nuevo recibido en $_POST['new'] en la variable $newy :
    if (isset($_COOKIE['deseos'])) {//si existe la cookie deseos
      $deseos = unserialize($_COOKIE['deseos']);//descodificacon unserialize la cookie para mostrarla
    } else {//sino existe la cookie de deseos :
      $deseos = [];//deseos estara vacio
    }
    $deseos[] = $new;//añade el contenido de $new al array de deseos
    setcookie('deseos', serialize($deseos), time() + 60*60*2);//establece la cookie de nuevoy la coodificas
    header('Location: index.php?method=home');//redirige a home, dond se mostrara tu lista dedeseos
  }

  public function delete()//delete borra un deseo de la lista. Debe recibir el indice del deseo.
  {
    // echo "<pre>";
    // print_r($_GET);
    if (isset($_COOKIE['deseos'])) {//si la cokie de deseos contiene algo:
      $deseos = unserialize($_COOKIE['deseos']);//descodifica con unserialize la cookie y la mete en $deseos
    } else {
      $deseos = [];//sino, $deseos esta vacia
    }
    $id = $_GET['id'];//Si NO esta vacia :
    unset($deseos[$id]);//eliminar un deseo por id
    setcookie('deseos', serialize($deseos), time() + 60*60*2);//establece la cookie con como quedan los deseos
    header('Location: index.php?method=home');//redirige al home con los deseos actualizados
  }

  public function empty()//empty vacía la lista de deseos.
  {
    setcookie('deseos', '',  1);//Vaciar/Eliminar la cookie de deseos
    // setcookie('deseos', '', time() - 1);
    header('Location: index.php?method=home');  ///redirige al home donde se muestra tu lsta deseos  
  }

  public function close()//close Cierra sesión: borra la cookie.
  {
    setcookie('deseos', '',  1);
    setcookie('name', '',  1);
    setcookie('password', '',  1);//con estas 3 lineas borras las cookies
    header('Location: index.php?method=login');//y esta te lleva al login,al "haber cerrado la sesion"
  }





}