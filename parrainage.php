<?php
include("db.php");

/* Récupération et normalisation du nom */
if (!isset($_POST['nom']) || empty($_POST['nom'])) {
    die("Étudiant introuvable 😕");
}

$nom = strtoupper(trim($_POST['nom'])));

/* Requête PostgreSQL */
$sql = "
    SELECT 
        e.nom AS etudiant,
        COALESCE(
            CASE 
                WHEN UPPER(b.etudiant_nom) = $1 THEN b.binome_nom
                WHEN UPPER(b.binome_nom) = $1 THEN b.etudiant_nom
            END,
            'Pas de binôme'
        ) AS binome
    FROM etudiants e
    LEFT JOIN binome b
        ON UPPER(e.nom) = UPPER(b.etudiant_nom)
        OR UPPER(e.nom) = UPPER(b.binome_nom)
    WHERE UPPER(e.nom) = $1
    LIMIT 1
";

/* Exécution */
$result = pg_query_params($conn, $sql, [$nom]);

if (!$result) {
    die("Erreur lors de la requête");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat binôme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Résultat du binôme 🤝</h2>

<?php
if (pg_num_rows($result) > 0) {
    $row = pg_fetch_assoc($result);
    echo "<p>Ton binôme est : <strong>" . htmlspecialchars($row['binome']) . "</strong></p>";
} else {
    echo "<p>Étudiant introuvable 😕</p>";
}
?>

</body>
</html>
