<html>
<head>
<meta charset="UTF-8">
</head>
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

$sql = "SELECT * FROM kapcsolat";

$result = mysqli_query($conn,$sql)or die(mysqli_error());

echo "<table border='2px'>";
echo "<tr><th>Név</th><th>Email</th><th>Uzenet</th></tr>";

while($row = mysqli_fetch_array($result)) {
    $nev = $row['nev'];
    $email = $row['email'];
    $uzenet = $row['uzenet'];
    echo "<tr><td>".$nev."</td><td>".$email."</td><td>".$uzenet."</td></tr>";
} 

echo "</table>";
mysqli_close($conn);
?>
</html>