<?php
include "db_connection.php";
session_start(); // Zainicjuj sesję

// Sprawdź, czy użytkownik jest zalogowany
if (isset($_SESSION['user_id'])) {
    // Użytkownik zalogowany, pokaż przycisk "Wyloguj"
    echo '<button class="Log" onclick="window.location.href=\'logout.php\';">Wyloguj</button>';
} else {
    // Użytkownik niezalogowany, pokaż przycisk "Logowanie"
    echo '<button class="Log" onclick="window.location.href=\'Login.php\';">Logowanie</button>';
}
?>