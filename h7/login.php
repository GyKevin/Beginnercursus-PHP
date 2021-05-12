<?php
    session_start();

    function isAdmin($isAdmin) {
        return $isAdmin;
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {

        //connectiong to database
        $DB_DATABASE = "logins";
        $DB_HOST = "localhost";
        $DB_USERNAME = "root";
        $DB_PASSWORD = "kekvile";

        $dbc = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
        $res = $dbc->query("SELECT * FROM users WHERE username='{$_POST['username']}' AND password='{$_POST['password']}' ORDER BY username");
        $row = $res->fetch_assoc();
        $rights = $row['privileges']; // 0 of een 1
        $isAdmin = ($rights == 1) ? true : false; //ternary
        if ($rights == 1){
            $isAdmin = true;
        } else {
            $isAdmin = false;
        }
        

        //if an error happens
        if (mysqli_connect_errno()) {
            printf("Connection failed: ", mysqli_connect_errno());
            exit();
        }

        //login succes/fail
        if ($row) {
            $_SESSION["userid"] = $row['id'];
            $_SESSION["username"] = $row['username'];
            $_SESSION["loggedIn"] = true;
            $_SESSION["isAdmin"] = $isAdmin;
            setcookie("userid", $row['id'], time() + 10, "/");
            header("location: home.php");
        } else {
            $_SESSION["loggedIn"] = false;
            $_SESSION["error"] = "login failed, try again.";
            header("location: index.php");
        }

        
    }
?>