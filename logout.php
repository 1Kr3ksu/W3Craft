<?php
include "db_connection";
session_start(); // Rozpoczęcie sesji

// Usunięcie wszystkich zmiennych sesji
$_SESSION = array();

// Sprawdzenie, czy sesje używają ciasteczek, i usunięcie ciasteczka
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Zniszczenie sesji
session_destroy();

// Przekierowanie do strony logowania
header("Location: Login.php");
exit();
?>