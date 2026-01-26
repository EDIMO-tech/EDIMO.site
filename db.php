<?php
$host = "dpg-d5rpjiv5r7bs739ciaig-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "mabase";
$user = "mabase";
$pass = "TonMotDePasseRender";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Connexion OK
} catch (PDOException $e) {
    die("Erreur de connexion PostgreSQL : " . $e->getMessage());
}
?>



