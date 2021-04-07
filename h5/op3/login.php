<?php

    $users = ["piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truushendriks@wegweg.nl" => "arkiearkie201"];

    $variable = FALSE;
    foreach ($users as $login => $passw) {
        if ($_POST['username'] == $login && $_POST['password'] == $passw) {
            $variable = TRUE;
        }
    }

    if ($variable == TRUE) {
        echo "Welkom!";
    } else {
        echo "Sorry, geen toegang!";
    }

?>