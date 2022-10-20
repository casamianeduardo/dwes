<?php
    //serialize , unserialize , json_encode ,json_decode
    $capitales = [
        "españa" =>"madrid" ,
        "francia" => "paris"
    ];

    $infotrans = "";//informacion trans
    $infonotrans = "";// informacion de vuelta a la original

    $infotrans = serialize($capitales);
    echo "<br> Informacion serializada : <br>";
    var_dump($infotrans);



    //desserializarlo

    $infonotrans = unserialize($infotrans);
    echo "<br> Informacion DESserializada : ";
    var_dump($infonotrans);

    //Json
    
    $infotrans = json_encode($capitales);
    echo "<br>Informacion EN JSON : ";
    var_dump($infotrans);

    //json decode

    $infonotrans = json_decode($infotrans);
    echo "<br> Informacion original desde json : ";
    var_dump($infonotrans);