<?php
session_start();

require_once("funkcje.php");

function tryLogin($t_osoba) {
    if ($_POST["login"] == $t_osoba->login and
        $_POST["haslo"] == $t_osoba->haslo)
    {
        $_SESSION["zalogowanyImie"] = $t_osoba->imieNazwisko;
        $_SESSION["zalogowany"] = 1;
        header("Location: user.php");
    }
}

if (isset($_POST["login"]) and isset($_POST["haslo"])) {
    tryLogin($osoba1);
    tryLogin($osoba2);
    if (!$_SESSION["zalogowany"]) {
        header("Location: index.php");
    } else {
        // needed when already logged in user enters invalid data
        header("Location: user.php");
    }
}

?>
