<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 173</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="script.php" name="form" method="post">
    <label for="select">Votre couleur</label>
    <select name="select" id="select">
        <option value="red">Rouge</option>
        <option value="green">Vert</option>
        <option value="blue">Bleu</option>
        <option value="yellow">Jaune</option>
        <option value="pink">Rose</option>
    </select>
    <input type="submit" name="submit" id="submit">
</form>

</body>
</html>