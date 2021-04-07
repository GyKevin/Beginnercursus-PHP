<?php

function weather() {
    $c = 12;
    $f = NULL;

    $f = $c * 9/5 +32;

    echo $c." celsius is ".$f." farenheit";
}

weather();

?>