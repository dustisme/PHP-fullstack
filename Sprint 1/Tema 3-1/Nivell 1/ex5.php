<?php
    $numbers1 = [30, 67, 27, 21, 41];
    $numbers2 = [345, 87, 1];

    //afegir
    array_push($numbers2, 20396);
    print_r($numbers2);
    echo "<br>";

    //fusió
    $final = array_merge($numbers1, $numbers2);
    
    //mida
    echo sizeof($final);
    echo "<br>";

    //resultat valor a valor
    var_dump($final);
?>