<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>Escribe los tres nombres que mas te gusten, en los siguientes campos : </h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" name="campo[]" value="campo1">
    <input type="text" name="campo[]" value="campo2">
    <input type="text" name="campo[]" value="campo3">
    <input type="submit" value="enviar">
</form>

<?php

foreach($_POST['campo'] as $campo) {
    echo "<p>Nombre : $campo</p>";
}

?>





    
</body>
</html>