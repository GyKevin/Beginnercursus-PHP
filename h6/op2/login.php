<?php
    require_once("./classes/sql.php");
    $db = new Database();
    $res = $db->query("SELECT * FROM `users` WHERE `username`='{$_POST['username']}' AND `password`='{$_POST['password']}' ORDER BY `username` ASC LIMIT 1");
    $row = $res->fetch_assoc();

    if ($row) {
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang!";
    }
?>