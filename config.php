<?php
$servername = "localhost";
$username = "admin";
$password = "moustapha";
$dbname = "ecom1_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo' ma connexion fonctionne';
}
?>