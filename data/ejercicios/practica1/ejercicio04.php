<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //fibonazi
    //0,1,1,2,3,5,6,13,21,34

    $num1 = 0;
    $num2 = 1;
    $num3;

    echo"" . $num1 . "<br>" . "" . $num2 . "<br>" ;
    echo"<hr>";

        for ($i = 0 ;$i <= 9; $i++ ){
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;

            echo $num3 . "<br>";
        }



    ?>
</body>
</html>