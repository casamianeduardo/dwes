<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    
    <?php
    $quinteto = array("Calderon"=>"Base", "Jordan"=>"Escolta", "McGrady"=>"Alero", "Antetokoumpo"=>"Ala-pivot", "O´Neal"=>"Pivot");
    
    foreach($quinteto as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    ?> 

    
    
</body>
</html>