<?php

function deelbaardoor() {
    $getal = 7;
    if ($getal % 3 == 0) {
        echo $getal." is deelbaar door 3.";
    } else {
        echo $getal." is niet deelbaar door 3.";
    }
}
deelbaardoor();

?>