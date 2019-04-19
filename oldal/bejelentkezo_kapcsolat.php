<?php
/*Adatbázis*/
$servername = "localhost";
$username = "kts";
$password = "229422";
$dbname = "kts";

/* Attempt to connect to MySQL database */
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
?>
