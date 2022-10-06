<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form name= "miformu" action="/autoriza.php" method="GET"> <!--en el action ponemos la direccion a la quequeremos mandar la informacion del formul -->
    <!-- en formularios SIEMPRE METODO POST, con get mostrarias el usuario y contraseña en la url -->
<p>
    <label for = "nombre">Introduce NOMBRE: </label>
    <input type="text" name="nombreusu" id="nombreusu">
</p>
 <p>
     <label for="password">Introduce la contraseña</label>
     <input type="password" name = "passwd" id="passwd">

     
</p>

<p>Elige tu asignatura preferida :
    
    <label for="asignatura1">PHP</label>
    <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP" checked>
    <label for="asignatura2">Javascript</label> 
    <input type="checkbox" name="asignaturas[]" id="asignatura2" value="Javascript">
    <label for="asignatura3">Python</label>
    <input type="checkbox" name="asignaturas[]" id="asignatura3" value="Python">
    
</p>

<p>Elige tu equipo de baloncesto:
    <label for="equipo1"> Zaragoza</label>
    <input type="radio" name="equipo" id="equipo1" value="Zaragoza">
    <label for="equipo2"> Madrid</label>
    <input type="radio" name="equipo" id="equipo2" value="Madrid">
    <label for="equipo3"> Burgos</label>
    <input type="radio" name="equipo" id="equipo3" value="Burgos">

</p>

<p>Elige tu plato favorito
</p>
<p>
    
    <select name="menus" id="menus">
        <option value="codillo">Codillo asado</option>
        <option value="ensalada">Ensalada</option>
        <option value="macarrones">Macarrones con tomate</option>
        <option value="brocoli">Brocoli</option>
    </select>
    
    

</p>

<p>
    <p>Elige tus platos favoritos(SELECT MULTIPLE)
    </p>
    <p>
        
        <select name="menusm[]" id="menus" multiple required><!--Multiple Para que le deja elegir varias opciones, require para que obligue a elegir una-->
            <option value="codillo">Codillo asado</option>
            <option value="ensalada">Ensalada</option>
            <option value="macarrones">Macarrones con tomate</option>
            <option value="brocoli">Brocoli</option>
        </select>
</p>

<input type="hidden" name="ip" value="<?=$_SERVER['SERVER_ADDR']?>">

<input type="submit" name="envio" id="envio" value = "Enviar Datos">

</form>

</body>
</html>