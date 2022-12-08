<?php
$title = 'Historique';
$h1 = 'Historique';
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
    <a href="historiqueFiles/avancee.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Avancée</h1>
                <p class="card-text">Consultez l’avancée générale et par corps de métier</p>
            </div>
        </div>
    </a>
    <a href="historiqueFiles/listeBijoux.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Tous les bijoux</h1>
                <p class="card-text">Liste de tout les bijoux créés, modifiés, vendus...</p>
            </div>
        </div>
    </a>
</div>

<?php
include 'phpFiles/footer.php';