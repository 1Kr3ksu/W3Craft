<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3craft";



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
    echo "Error ".$conn->connect_error;
}