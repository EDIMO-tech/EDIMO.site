<?php
require_once "db.php";

$sql = "SELECT * FROM etudiants";
$result = pg_query($conn, $sql);

if (!$result) {
    die("Erreur SQL : " . pg_last_error($conn));
}

while ($row = pg_fetch_assoc($result)) {
    echo $row['nom'] . "<br>";
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
    if($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo "<p>Ton binôme est : <strong>{$row['binome']}</strong></p>";
    } else {
        echo "<p>Étudiant introuvable 😕</p>";
    }
    ?>
</body>
</html>

