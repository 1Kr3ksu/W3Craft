<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<form method="POST" action="Login.php">
    <div class="login-container">
        <form class="login-form">
            <h2>Logowanie</h2>
            <div class="form-group">
                <label for="username">Nazwa użytkownika</label>
                <input type="text" id="User_name" name="User_name" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Zaloguj się</button>
            <p class="message">Nie masz konta? <a href="register.php">Zarejestruj się</a></p>
        </form>
    </div>
</body>
</html>
<?php
include "db_connection.php";
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['User_name']) && isset($_POST['password'])) {
        $username = $_POST['User_name'];
        $password = $_POST['password'];
      
        // Przygotowanie zapytania
        $stmt = $conn->prepare("SELECT id, username, haslo FROM konta WHERE username = ?");
        if ($stmt) {
            // Bindowanie parametrów
            $stmt->bind_param("s", $username);

            // Wykonywanie zapytania
            $stmt->execute();

            // Bindowanie wyników
            $stmt->bind_result($id, $username, $hashed_password);

            // Pobieranie wyników
            if ($stmt->fetch()) {
                // Sprawdzanie hasła
                if (password_verify($password, $hashed_password)) {
                    header("location:index.php");
                    $_SESSION["user_id"] = $id;
                    
                } else {
                    echo "Nieprawidłowy login lub hasło.";
                }
            } else {
                // Użytkownik nie istnieje
                echo "Nie znaleziono użytkownika.";
            }

            // Zamknięcie zapytania
            $stmt->close();
        } else {
            echo "Błąd zapytania: " . $conn->error;
        }
    } else {
        echo "Proszę uzupełnić wszystkie pola.";
    }

    // Zamknięcie połączenia
    $conn->close();
}
?>