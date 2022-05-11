<?php

$db = new PDO('mysql:host=localhost;dbname=imdb; port=3306; charset=utf8', 'root','');
$stmt = $db -> query ('SELECT * FROM SAE203_Materiel');
$result = $stmt -> fetchall();

foreach ($result as $materiel){
    echo "<a href='PageProduit.html'><div class='carte-produit'><div class='img-produit'><img src='{$materiel["image_mat"]}' alt=''></div><div class='info-produit'><h4>{$materiel["nom_materiel"]}</h4><div class='ref-produit'><p>référence produit</p></div><div class='prix-produit'><h4>{$materiel["prix_materiel"]}</h4></div><div class='page-produit'><a href=></a></div></div></div></a>";
}

?>