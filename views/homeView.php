
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue</h1>
    <h2>Panier :</h2>
    <ul>
        <?php if (!empty($_SESSION['panier'])) : ?>
            <?php foreach ($_SESSION['panier'] as $article) : ?>
                <li><?= $article['nom'] ?> - <?= $article['prix'] ?> €</li>
            <?php endforeach; ?>
        <?php else : ?>
            <li>Votre panier est vide.</li>
        <?php endif; ?>
    </ul>
    <a href="index.php?action=add_to_cart">Ajouter un article</a>
</body>
</html>
