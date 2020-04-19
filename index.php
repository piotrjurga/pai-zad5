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
        if (isset($_POST["wyloguj"])) {
            $_SESSION["zalogowany"] = 0;
        }

        /*
        if (isset($_POST["login"])) {
            echo "Przesłany login: ";
            echo test_input($_POST["login"]) . "<br>";
        }
        if (isset($_POST["haslo"])) {
            echo "Przesłane hasło: ";
            echo test_input($_POST["haslo"]) . "<br>";
        }
        */
    ?>
    <h1>Nasz system</h1>
    <form action="/logowanie.php" method="post">
        <fieldset>
            <legend>Logowanie</legend>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login"><br>
            <label for="haslo">Hasło:</label>
            <input type="password" id="haslo" name="haslo"><br>
            <input type="submit" value="Zaloguj">
        </fieldset>
    </form>
    <br>
    <form action="/cookie.php" method="get">
        <fieldset>
            <legend>Tworzenie Cookie</legend>
            <label for="czas">Czas:</label>
            <input type="number" id="czas" name="czas"><br>
            <input type="submit" name="utworzCookie" value="Utwórz Cookie">
        </fieldset>
    </form>
    <?php
        if (isset($_COOKIE["czas"])) {
            echo "Wartość cookie: " . $_COOKIE["czas"];
        }
    ?>
    <br>
    <a href="user.php">user</a>
</body>
</html>
