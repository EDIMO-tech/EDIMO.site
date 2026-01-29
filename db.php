<?php
$host = "dpg-d5tbtk8gjchc73f6f6qg-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "mabase2";
$user = "mabase2";
$pass = "0ydrmZFWceLNvoDZxSrZyI61Y23OlAea";

$conn = pg_connect(
    "host=$host port=$port dbname=$dbname user=$user password=$pass"
);

if (!$conn) {
    die("Erreur de connexion PostgreSQL");
}


