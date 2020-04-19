<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
    <?php
        require_once("funkcje.php");

        if (isset($_GET["czas"])) {
            setcookie("czas", $_GET["czas"], time() + $_GET["czas"], "/");
        }
        echo "Cookie set";
    ?>
    <a href="index.php">wstecz</a>
</body>
</html>
