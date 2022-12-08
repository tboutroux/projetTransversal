<?php
$title = 'Autres';
$h1 = 'Autres';
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
    <a href="otherFiles/clients.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Clients</h1>
                <p class="card-text">Créez et consultez les comptes clients</p>
            </div>
        </div>
    </a>
    <a href="otherFiles/matieres.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Matières</h1>
                <p class="card-text">Créez et consultez la liste des matériaux</p>
            </div>
        </div>
    </a>
</div>

<?php
include 'phpFiles/footer.php';