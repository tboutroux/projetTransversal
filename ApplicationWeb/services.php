<?php
$title = 'Services';
$h1 = 'Services';
include 'phpFiles/header.php';
?>

<div class="back-button">
    <a href="index.php">
        <div class="button">
            <img src="pictures/arrow.png" alt="Bouton Retour">
        </div>
    </a>
</div>

<div class="card-container">
    <a href="liste.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Création</h1>
                <p class="card-text">Création personalisée</p>
            </div>
        </div>
    </a>
    <a href="ajouter_briquet.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Révision</h1>
                <p class="card-text">Transformation, réparation, retaille de pierre,<br> avec estimation</p>
            </div>
        </div>
    </a>
    <a href="ajouter_briquet.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Estimation</h1>
                <p class="card-text">Estimation simple</p>
            </div>
        </div>
    </a>
</div>

<?php
include 'phpFiles/footer.php';