<?php
// Infos de connexion Render PostgreSQL
$host = "dpg-d5rpjiv5r7bs739ciaig-a.oregon-postgres.render.com";       // ex: dpg-xxxx.oregon-postgres.render.com
$port = "5432";                  // port par défaut PostgreSQL
$dbname = "mabase_u0z7";              // nom de ta base
$user = "mabase";                // ton utilisateur
$pass = "s55zgv2gSSBzAiZ0KPb7CQkv2bBo0063"; // ton mot de passe


try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Connexion OK
} catch (PDOException $e) {
    die("Erreur de connexion PostgreSQL : " . $e->getMessage());
}
?>




