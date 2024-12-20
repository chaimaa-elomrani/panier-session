<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Panier</title>
</head>
<body>
    <h1>Ajouter au Panier</h1>
    <form method="POST" action="index.php?action=add_to_cart">
        <label for="nom">Nom de l'article :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" required><br><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
