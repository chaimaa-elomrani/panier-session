<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = [
        'nom' => $_POST['nom'],
        'prix' => $_POST['prix']
    ];

    $_SESSION['panier'][] = $item;

    header('Location: index.php');
    exit;
}

require 'views/cartView.php';
?>
