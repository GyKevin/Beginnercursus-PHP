<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <?php
    if(isset($_SESSION["error"])){
        printf($_SESSION["error"]);
    }
    ?>
    <form action="login.php" method="POST">
        <input type="text" name="username"> <br>
        <input type="password" name="password">
        <input type="submit" name="enter" value="login">
    </form>
</body>
</html>