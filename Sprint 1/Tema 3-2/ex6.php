<?php

$per = rand(0, 100);
isBitten($per);

function isBitten($per)
{
    if ($per <= 50) {
        echo "true";
    } else {
        echo "false";
    }
}
?>