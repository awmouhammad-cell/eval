<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}

$stlt = $conn->prepare("INSERT INTO livres (titre, auteur, genre, proprio) VALUES (?, ?, ?, ?)");
$stlt->bind_param("ssss", $titre, $auteur, $genre, $proprio);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"];
    $auteur = $_POST["auteur"];
    $genre = $_POST["genre"];
    $proprio = $_POST["proprio"];

    if ($stlt->execute()) {
        echo "Livre ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du livre : " . $stlt->error;
    }
} else {
    echo "Aucune donnée reçue.";
}
$stlt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre ajouté</title>
</head>
<body>
    <br><br>
  <a href="../index.php">retour à l'accueil</a>
</body>