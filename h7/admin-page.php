<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welkom, admin</h1>
<form action="admin-page.php">
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