<?php
require_once "db.php";

// 1️⃣ Récupération du paramètre depuis l'URL
if (!isset($_GET['nom'])) {
    die("Étudiant introuvable 😢");
}

$nom = $_GET['nom'];

// 2️⃣ Requête ciblée (UN SEUL étudiant)
$sql = "SELECT nom_binome FROM etudiants WHERE nom = $1";
$result = pg_query_params($conn, $sql, [$nom]);

if (!$result) {
    die("Erreur SQL");
}

// 3️⃣ Vérification du résultat
if (pg_num_rows($result) === 0) {
    echo "Binôme introuvable 😢";
    exit;
}

// 4️⃣ Affichage du binôme
$data = pg_fetch_assoc($result);
echo "<h2>Résultat du binôme 🤝</h2>";
echo "<strong>" . htmlspecialchars($data['nom_binome']) . "</strong>";
