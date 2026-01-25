<?php
$host = "localhost";
$user = "root";   // ton utilisateur MySQL
$pass = "";       // ton mot de passe MySQL
$db   = "mabase";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>
