<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de livre</title>
</head>
<body>
    <h1>Ajouter un livre</h1>
    <form action="une2erePage.php" method="post">
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" required><br><br>
        <label for="auteur">Auteur:</label>
        <input type="text" id="auteur" name="auteur" required><br><br>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required><br><br>
        <label for="proprio">Propriétaire:</label>
        <input type="text" id="proprio" name="proprio" required><br><br>
        <input type="submit" value="Ajouter" href="index.php">
    </form>
</body>
</html>