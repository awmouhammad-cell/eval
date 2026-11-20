<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}

$sql = "SELECT DISTINCT titre FROM livres";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "titre :" . $row["titre"] . " ";
        echo '<br>';
    }
} else {
    echo "Aucun livre trouvé.";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <a href="../index.php">retour à l'accueil</a>
</body>
</html>