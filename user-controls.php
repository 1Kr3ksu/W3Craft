<?php
include "db_connection.php";
session_start(); 


if (isset($_SESSION['user_id'])) {
  
    echo '<button class="Log" onclick="window.location.href=\'logout.php\';">Wyloguj</button>';
} else {
 
    echo '<button class="Log" onclick="window.location.href=\'Login.php\';">Logowanie</button>';
}
?>