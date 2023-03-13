<?php

$num = 31;

esParell($num);


function esParell(int $n) {
    $num = $n % 2;

    if ($num == 0) {
        echo "El número $n és parell";
    } else {
        echo "El número $n no és parell";
    }
}

?>