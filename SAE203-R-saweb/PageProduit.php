<?php
include("connexion.php");
$stmt = $db -> query ('SELECT * FROM SAE203_Materiel WHERE id_materiel='.$_GET['id']);
$result = $stmt -> fetchall();

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    
    
    <title>Document</title>
</head>
<body>
        <nav>
            <ul>
                <li class="nav"><a href="index.php"><img src="logo.svg" alt="" width="64"></a></li>
                <li class="nav"><a href="catalogue.php">Matériel</a></li>
                <li class="nav"><a href="Lumiere.php">Lumière</a></li>
                <li class="nav"><a href="son.php">Son</a></li>
                <li class="nav"><img src="images/icon/shopping-bag.png" alt="" width="40"></li>
            </ul>
        </nav>


    <div class="part-produit">
        <h2><?php echo $result[0]["nom_materiel"]?></h2>
        
        <img src=<?php echo $result[0]["image_mat"]?> alt="" class="apercu-produit">
        <h3><?php echo $result[0]["prix_materiel"]?>€</h3>
    </div>

    <div class="info-location">
        <h4> Dates de location :</h4>

        <div class="debut-location date-loca">
            <label for="start">Début:</label>

            <input type="date" id="start" name="location-start"
                value="day-start"
                min="2022-01-01" max="2029-12-31">
        </div>

        <div class="fin-location date-loca">
            <label for="start">Fin:</label>

            <input type="date" id="end" name="location-end"
                value="day-end"
                min="2022-01-01" max="2029-12-31">
        </div>

        <div class="prix-location">
            <h2>Prix</h2>
        </div>

        <input type="button" value="Réserver" class="reservation-form">

    </div>

    <div class="reservation reserv-invisible">
        <form action="mail.php" method="POST">
            <div class="input">
                <label>Nom</label>
                <input type="text" name="name"/>
            </div>

            <div class="input">
                <label>Prénom</label>
                <input type="text" name="first-name"/>
            </div>

            <div class="input">
                <label>Email</label>
                <input type="text" name="mailclient"/>
            </div>
                  
            <div class="envoi">
                    <input type="button" value="Finaliser réservation" class="valider-reserv">
            </div>
        </form>
    </div>


    <?php
    include("connexion.php");
    $stmt = $db -> query ('SELECT * FROM SAE203_Materiel');
    $result = $stmt -> fetchall();
    ?>


    <script type="text/javascript" src="script.js"></script>

</body>
</html>