<!DOCTYPE html>
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
                <li class="nav"><a href="catalogue.php">Marériel</a></li>
                <li class="nav"><a href="Lumiere.php">Lumière</a></li>
                <li class="nav"><a href="son.php">Son</a></li>
                <li class="nav"><img src="images/icon/shopping-bag.png" alt="" width="40"></li>
            </ul>
        </nav>

        <header class="header-accueil">
            <h1> <span class="span-1"> Retrouvez tout  le matériel</span><br> <span class="span-1"> dont vous avez besoin !</span></h1>
        </header>

    
        <h3 class="align">Derniers articles réservés :</h3>
    <div class="center-card">

        <div class="carte-produit">
            <div class="img-produit">
                <img src="images/enceinte/2.jpg" alt="">
            </div>

            <div class="info-produit">
                <h4>Nom produit</h4>

                <div class="ref-produit">
                    <p>référence produit</p>
                </div>

                <div class="prix-produit">
                    <h4>prix produit</h4>
                </div>

                <div class="page-produit">
                    <a href="#"></a>
                </div>  
            </div>
        </div>

        <a href="PageProduit.html">
        <div class="carte-produit">
            <div class="img-produit">
                <img src="images/enceinte/2.jpg" alt="">
            </div>

            <div class="info-produit">
                <h4>Nom produit</h4>

                <div class="ref-produit">
                    <p>référence produit</p>
                </div>

                <div class="prix-produit">
                    <h4>prix produit</h4>
                </div>

                <div class="page-produit">
                    <a href="#"></a>
                </div>  
            </div>
        </div>
        </a>

        <div class="carte-produit">
            <div class="img-produit">
                <img src="images/enceinte/2.jpg" alt="">
            </div>

            <div class="info-produit">
                <h4>Nom produit</h4>

                <div class="ref-produit">
                    <p>référence produit</p>
                </div>

                <div class="prix-produit">
                    <h4>prix produit</h4>
                </div>

                <div class="page-produit">
                    <a href="#"></a>
                </div>  
            </div>
        </div>

    </div>

    <div>
        <h3 class="align">Articles les plus réservés :</h3>


        <div class="center-card">

            <div class="carte-produit">
                <div class="img-produit">
                    <img src="images/enceinte/2.jpg" alt="">
                </div>
    
                <div class="info-produit">
                    <h4>Nom produit</h4>
    
                    <div class="ref-produit">
                        <p>référence produit</p>
                    </div>
    
                    <div class="prix-produit">
                        <h4>prix produit</h4>
                    </div>
    
                    <div class="page-produit">
                        <a href="#"></a>
                    </div>  
                </div>
            </div>
    
            <div class="carte-produit">
                <div class="img-produit">
                    <img src="images/enceinte/2.jpg" alt="">
                </div>
    
                <div class="info-produit">
                    <h4>Nom produit</h4>
    
                    <div class="ref-produit">
                        <p>référence produit</p>
                    </div>
    
                    <div class="prix-produit">
                        <h4>prix produit</h4>
                    </div>
    
                    <div class="page-produit">
                        <a href="#"></a>
                    </div>  
                </div>
            </div>
    
            <div class="carte-produit">
                <div class="img-produit">
                    <img src="images/enceinte/2.jpg" alt="">
                </div>
    
                <div class="info-produit">
                    <h4>Nom produit</h4>
    
                    <div class="ref-produit">
                        <p>référence produit</p>
                    </div>
    
                    <div class="prix-produit">
                        <h4>prix produit</h4>
                    </div>
    
                    <div class="page-produit">
                        <a href="#"></a>
                    </div>  
                </div>
            </div>
    
        </div>


    </div>

    <footer>

            <h4 class="">Catégories</h4>
                
                <div class="">
                    <ul>
                        <li><a href="">Matériel</a></li>
                        <li><a href="">Lumière</a></li>
                        <li><a href="">Son</a></li>
                    </ul>
                </div>
                        
            <h4 class="">À propos</h4>

                <div class="">
                    <ul>
                        <li><a href="quisuisje.php">Qui sommes-nous ?</a></li>
                        <li><a href="">Mentions légales</a></li>
                    </ul>
                </div>

        </footer>


    <?php
    include("connexion.php");
    $stmt = $db -> query ('SELECT * FROM SAE203_Materiel');
    $result = $stmt -> fetchall();
    ?>


<script type="text/javascript" src="script.js"></script>

</body>
</html>