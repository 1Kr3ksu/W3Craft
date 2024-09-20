<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stwórz konto!</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<div class="register-container">
    <form class="register" action="register.php" method="POST">
        <h2>Rejestracja</h2>
        <label for="Username">Nazwa użytkownika:</label>
        <input type="text" id="Username" name="Username" required>
        
        <label for="Email">E-mail:</label>
        <input type="Email" id="Email" name="Email" required>

        <label for="password">Hasło:</label>
        <input type="password" id="haslo" name="haslo" required>
        
        <button type="submit">Zarejestruj się</button>
    </form>
    
    <p>Masz już konto? <a href="Login.php">Zaloguj się</a></p>
</div>
</body>
</html>
<?php
include "db_connection.php";


session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $Email = $_POST['Email'];
    $password = isset($_POST['haslo']) ? $_POST['haslo'] : null;

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Niepoprawny format e-maila.";
        exit;
    }

    $domain = substr(strrchr($Email, "@"), 1);
    if (!checkdnsrr($domain, "MX")) {
        echo "Domena e-maila nie istnieje.";
        exit;
    }

    $checkEmailSql = "SELECT * FROM konta WHERE Email = ?";
    $stmt = $conn->prepare($checkEmailSql);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Ten e-mail jest już zarejestrowany.";
        exit;
    }
  
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

 
    $sql = "INSERT INTO konta (Username, Email, haslo) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $Email, $hashed_password);


    if ($stmt->execute()) {
        header("Location: Login.php"); 
        exit;
    } else {
        echo "Błąd podczas dodawania konta: " . $stmt->error;
    }

   
    $stmt->close();
}



// Close connection
$conn->close();                 
?>