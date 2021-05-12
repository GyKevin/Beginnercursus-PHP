<?php
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <!--welcome message-->
    <?php
        printf("Welcome, ".$_SESSION["username"]);
        echo "<br>";
    ?>

    <!--admin page-->
    <?php
        include 'login.php';
        if (isAdmin($_SESSION['isAdmin'])) : ?>
        <a href="admin-page.php">Admin page</a>
    <?php endif; ?>

    <!--logout button-->
    <form action="home.php">
        <input type="submit" name="logout" value="logout">
    </form>
    <?php
        if(isset($_GET["logout"])) {
            session_destroy();
            header("location: index.php");
            exit;
        }
    ?>
</body>
</html>