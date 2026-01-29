<?php
$host = "dpg-d5tbtk8gjchc73f6f6qg-a"; // Internal URL Render
$port = "5432";
$dbname = "mabase2";
$user = "mabase2";
$pass = "0ydrmZFWceLNvoDZxSrZyI61Y23OlAea";

// Connexion PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
    die("Erreur de connexion : " . pg_last_error($conn));
}

// Exemple : récupérer les étudiants
$result = pg_query($conn, "SELECT * FROM etudiants");
if (!$result) {
    die("Erreur dans la requête : " . pg_last_error($conn));
}

// Affichage
echo "<h2>Liste des étudiants :</h2><ul>";
while ($row = pg_fetch_assoc($result)) {
    echo "<li>" . htmlspecialchars($row['nom']) . "</li>";
}
echo "</ul>";

// Fermeture de la connexion
pg_close($conn);
?>
