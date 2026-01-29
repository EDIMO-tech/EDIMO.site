<?php
include("db.php");
// Récupérer le nom de l’utilisateur et normaliser la casse
$nom = strtoupper(trim($_POST['nom']));
// Requête SQL pour trouver le binôme
$sql = "SELECT 
            e.nom AS etudiant,
            COALESCE(
                CASE 
                    WHEN UPPER(b.etudiant_nom) = '$nom' THEN b.binome_nom
                    WHEN UPPER(b.binome_nom) = '$nom' THEN b.etudiant_nom
                END,
                'Pas de binôme'
            ) AS binome
        FROM etudiants e
        LEFT JOIN binome b
            ON UPPER(e.nom) = UPPER(b.etudiant_nom) OR UPPER(e.nom) = UPPER(b.binome_nom)
        WHERE UPPER(e.nom) = '$nom'
        LIMIT 1";
$result = $conn->query($sql);
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
    if($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo "<p>Ton binôme est : <strong>{$row['binome']}</strong></p>";
    } else {
        echo "<p>Étudiant introuvable 😕</p>";
    }
    ?>
</body>
</html>
