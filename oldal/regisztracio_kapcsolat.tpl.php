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

$felhasznalonev=$_REQUEST['username'];
$jelszo=$_REQUEST['password'];
$email=$_REQUEST['email'];
$vezeteknev=$_REQUEST['vezeteknev'];
$keresztnev=$_REQUEST['keresztnev'];

$sql = "INSERT INTO felhasznalok (username, password, email, vezeteknev, keresztnev) VALUES ('$felhasznalonev', '$jelszo', '$email', '$vezeteknev', '$keresztnev')";

if ($conn->query($sql) === TRUE) {
    echo "Sikeres regisztracio";
} else {
   echo "Hiba: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: http://www.t44x0d.szakdoga.net/oldal/bejelentkezes.tpl.php');
?>