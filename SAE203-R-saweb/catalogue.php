<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <ul>
            <li class="nav"><a href="index.php"><img src="logo.svg" alt="" width="64"></a></li>
            <li class="nav"><a href="catalogue.php">Marériel</a></li>
            <li class="nav"><a href="Lumiere.php">Lumière</a></li>
            <li class="nav"><a href="son.php">Son</a></li>
            <li class="nav"><img src="images/icon/shopping-bag.png" alt="" width="40"></li>
        </ul>
    </nav>

    <h3>Catégorie produit</h3>

    <div class='center-card-product-page'>

<?php
include("connexion.php");
$stmt = $db -> query ('SELECT * FROM SAE203_Materiel');
$result = $stmt -> fetchall();

foreach ($result as $materiel){
    echo "
    <a href='PageProduit.php?id={$materiel["id_materiel"]}'>
        <div class='carte-produit'>
            <div class='img-produit'>
            <img src='{$materiel["image_mat"]}' alt=''>
            </div>

        <div class='info-produit'>
            <h4>{$materiel["nom_materiel"]}</h4>

            <div class='prix-produit'>
                <h4>{$materiel["prix_materiel"]}€</h4>
            </div>

            <div class='page-produit'>
                <a href=></a>
            </div>

            </div>
        </div>
    </a>";
}
?>

    </div>

</body>
</html>