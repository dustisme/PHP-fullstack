<?php

$n = 55;
percentage($n);


function percentage($grade)
{
    switch ($grade) {
        case $grade <= 33:
            echo "No passa";
            break;
        case $grade <= 44:
            echo "Tercera Divisió";
            break;
        case $grade <= 59:
            echo "Segona Divisió";
            break;
        case $grade >= 60:
            echo "Primera Divisió";
            break;
        default:
            echo "Introdueix una nota correcte";
            break;

    }
}
?>