<?php
// Exemple de catalogue de produits (normalement issu d'une base de données MySQL)
$produits = [
    ["id" => 1, "nom" => "T-shirt Coton Bio", "prix" => 19.99, "image" => "tshirt.jpg"],
    ["id" => 2, "nom" => "Jean Slim Stretch", "prix" => 49.99, "image" => "jean.jpg"],
    ["id" => 3, "nom" => "Baskets Urbaines", "prix" => 79.99, "image" => "baskets.jpg"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Boutique en Ligne</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .catalogue { display: flex; gap: 20px; }
        .produit { border: 1px solid #ccc; padding: 15px; border-radius: 5px; width: 200px; text-align: center; }
        .prix { color: #b12704; font-weight: bold; font-size: 1.1em; }
        .btn { background: #ffd814; border: 1px solid #fcd200; padding: 10px; cursor: pointer; width: 100%; border-radius: 3px; }
    </style>
</head>
<body>

    <h1>Nos Produits</h1>
    
    <div class="catalogue">
        <?php foreach ($produits as $p): ?>
            <div class="produit">
                <h3><?= htmlspecialchars($p['nom']) ?></h3>
                <p class="prix"><?= number_format($p['prix'], 2, ',', ' ') ?> €</p>
                <form action="panier.php" method="POST">
                    <input type="hidden" name="id_produit" value="<?= $p['id'] ?>">
                    <button type="submit" class="btn">Ajouter au panier</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>




