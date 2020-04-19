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

        if (!isset($_SESSION["zalogowany"]) or
            $_SESSION["zalogowany"] != 1)
        {
            header("Location: index.php");
        }

        echo "Zalogowano " . $_SESSION["zalogowanyImie"];
    ?>
    <form action='user.php' method='POST' enctype='multipart/form-data'>
        <fieldset>
            <legend>Przesyłanie obrazka</legend>
            <input type="file" name="image" value="Wybierz obraz">
            <input type="submit" value="Prześlij">
        </fieldset>
    </form>
    <?php
        if (isset($_FILES["image"])) {
            if (file_exists("user_image.jpg")) {
                unlink(realpath("user_image.jpg"));
            }
            move_uploaded_file($_FILES["image"]["tmp_name"], "user_image.jpg");
        }
    ?>
    <img src="user_image.jpg" alt="Brak obrazu">

    <form action="index.php" method="post">
        <fieldset>
            <legend>Wylogowywanie</legend>
            <input type="submit" name="wyloguj" value="Wyloguj">
        </fieldset>
    </form>
    <a href="index.php">index</a>
</body>
</html>
