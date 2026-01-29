<?php
$host = "dpg-d5tbtk8gjchc73f6f6qg-a.oregon.postgres.render.com";       // ex: dpg-xxxxx.render.com
$port = "5432";
$dbname = "mabase2";
$user = "mabase2";
$pass = "0ydrmZFWceLNvoDZxSrZyI61Y23OlAea";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
    die("Erreur de connexion : " . pg_last_error());
}

// Exemple : récupérer les étudiants
$result = pg_query($conn, "SELECT * FROM etudiants");
if (!$result) {
    die("Erreur dans la requête : " . pg_last_error());
}

// Affichage
echo "<h2>Liste des étudiants :</h2><ul>";
while ($row = pg_fetch_assoc($result)) {
    echo "<li>" . $row['nom'] . "</li>";
}
echo "</ul>";

// Fermeture de la connexion
pg_close($conn);
?>
