<?php

$per = rand();
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