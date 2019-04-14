<?php
$servername = "localhost";
$username = "kts";
$password = "229422";
$dbname = "kts";

// Csatlakozás
$conn = new mysqli($servername, $username, $password, $dbname);

// Ellenőrzés
if ($conn->connect_error) {
    die("Sikertelen csatlakozas: " . $conn->connect_error);
} 
echo "Sikeres csatlakozas <br>";


$nev=$_REQUEST['nev'];
$email=$_REQUEST['email'];
$uzenet=$_REQUEST['uzenet'];

$sql = "INSERT INTO kapcsolat (nev, email, uzenet) VALUES ('$nev', '$email', '$uzenet')";

if ($conn->query($sql) === TRUE) {
    echo "Sikeres uzenetkuldes";
} else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: http://www.t44x0d.szakdoga.net/oldal/uzenetek.php');
?>