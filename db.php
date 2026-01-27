<?php
$host = "sql303.infinityfree.com";
$port = "3306";
$dbname = "mabase";  // vérifie le nom exact de ta base
$user = "ifo_41001189";
$pass = "6vNqnX4RIZ";          // remplace par ton mot de passe MySQL

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
// Connexion OK
?>





