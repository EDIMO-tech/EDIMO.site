<?php
$host = "dpg-d5tbtk8gjchc73f6f6qg-a.oregon.postgres.render.com";       // ex: dpg-xxxxx.render.com
$port = "5432";
$dbname = "mabase2";
$user = "mabase2";
$pass = "0ydrmZFWceLNvoDZxSrZyI61Y23OlAea";

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
// Connexion OK
?>
