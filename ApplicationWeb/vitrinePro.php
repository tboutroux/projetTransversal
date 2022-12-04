<?php
$title = 'Vitrine';
$h1 = 'Vitrine';
include 'phpFiles/header.php';
?>

<div class="back-button">
    <a href="index.php">
        <div class="button">
            <img src="pictures/arrow.png" alt="Bouton Retour">
        </div>
    </a>
    <!--
    <div class="search-bar">
        <input type="text" require placeholder="Rechercher un bijou" name="search">
        <button type="submit">
            <img src="pictures/search.png" alt="Rechercher">
        </button>
    </div>
-->
</div>

<div class="insert-bijou">
    <a href="ajouter_bijou.php">
        <div class="insert-bijou-card">
            <div class="insert-bijou-card-body">
                <h4>Ajouter un bijou</h4>
            </div>
        </div>
    </a>
</div>

<div class="card-container">
    <div class="card" id='vitrine-card' style="width: 20vw; height: 51vh">
        <div class="vitrine-card-body">
            <div class="card-body-img">
                <!--<img src="" alt="">-->
                <div class="div-tmp"></div>
            </div>
            <div class="card-body-content">
                <h2>Collier doté de diamant brut</h2>
                <p class="card-text">Lorem ipsum dolor sit amet </p>
                <p class="card-text">Prix</p>
                <br>
                <a href="" class="vitrine-card-button">Détails</a>
                <a href="" class="vitrine-card-button">Supprimer</a>
            </div>               
        </div>
    </div>

    <div class="card" id='vitrine-card' style="width: 20vw; height: 51vh">
        <div class="vitrine-card-body">
            <div class="card-body-img">
                <!--<img src="" alt="">-->
                <div class="div-tmp"></div>
            </div>
            <div class="card-body-content">
                <h2>Collier doté de diamant brut</h2>
                <p class="card-text">Lorem ipsum dolor sit amet </p>
                <p class="card-text">Prix</p>
                <br>
                <a href="" class="vitrine-card-button">Détails</a>
                <a href="" class="vitrine-card-button">Supprimer</a>
            </div>               
        </div>
    </div>

    <div class="card" id='vitrine-card' style="width: 20vw; height: 51vh">
        <div class="vitrine-card-body">
            <div class="card-body-img">
                <!--<img src="" alt="">-->
                <div class="div-tmp"></div>
            </div>
            <div class="card-body-content">
                <h2>Collier doté de diamant brut</h2>
                <p class="card-text">Lorem ipsum dolor sit amet </p>
                <p class="card-text">Prix</p>
                <br>
                <a href="" class="vitrine-card-button">Détails</a>
                <a href="" class="vitrine-card-button">Supprimer</a>
            </div>               
        </div>
    </div>
</div>

<?php
include 'phpFiles/footer.php';