<?php
// Infos de connexion Render PostgreSQL
$host = "dpg-d5rpjiv5r7bs739ciaig-a.oregon-postgres.render.com";       // ex: dpg-xxxx.oregon-postgres.render.com
$port = "5432";                  // port par défaut PostgreSQL
$dbname = "mabase_u0z7";              // nom de ta base
$user = "mabase";                // ton utilisateur
$pass = "s55zgv2gSSBzAiZ0KPb7CQkv2bBo0063"; // ton mot de passe

// Connexion PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
    die("Erreur de connexion à la base PostgreSQL.");
} 
// Sinon connexion OK
?>


