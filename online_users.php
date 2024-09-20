<?php
// online_users.php
require_once 'db_connection.php'; // Upewnij się, że masz poprawne połączenie

// Zapytanie o użytkowników online (aktywnych w ciągu ostatnich 5 minut)
$stmt = $pdo->prepare("SELECT Username FROM konta WHERE last_activity >= NOW() - INTERVAL 5 MINUTE");
$stmt->execute();
$online_users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>