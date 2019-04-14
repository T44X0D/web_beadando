<?php
/*Adatbázis*/
$servername = "localhost";
$username = "kts";
$password = "229422";
$dbname = "kts";

// Csatlakozás
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Sikertelen csatlakozás: " . $conn->connect_error);
}
?>
