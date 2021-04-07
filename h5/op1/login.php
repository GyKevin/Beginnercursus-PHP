<?php

    if($_POST['username']=="admin" && $_POST['password']=="root" && $_POST['adress']=="wezelstraat" && $_POST['email']=="kgyori@roc-dev.com") {
        echo "login successful.<br>";
        echo "<a href=\"op1.html\">Go Back</a>";
    } else {
        echo "incorrect login.<br>";
        echo "<a href=\"op1.html\">Go Back</a>";
    }

?>