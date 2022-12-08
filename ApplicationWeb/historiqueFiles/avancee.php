<?php
$title = 'Avancée';
$h1 = 'Avancée';
include '../phpFiles/header.php';
?>

<div class="back-button">
    <a href="../historique.php">
        <div class="button">
            <img src="/projetTransversal/ApplicationWeb/pictures/arrow.png" alt="Bouton Retour">
        </div>
    </a>
</div>

<div class="card-container">
    <a href="liste.php">
        <div class="card" style="width: 18.5vw; height: 51vh">
            <div class="card-body">
                <h1>Fondeur / Mouleur</h1>
                <p class="card-text">Travaux en cours de moulage</p>
            </div>
        </div>
    </a>
    <a href="ajouter_briquet.php">
        <div class="card" style="width: 18.5vw; height: 51vh">
            <div class="card-body">
                <h1>Polisseur</h1>
                <p class="card-text">Travaux en cours de polissage</p>
            </div>
        </div>
    </a>
    <a href="ajouter_briquet.php">
        <div class="card" style="width: 18.5vw; height: 51vh">
            <div class="card-body">
                <h1>Tailleur</h1>
                <p class="card-text">Travaux en cours de taillage</p>
            </div>
        </div>
    </a>
    <a href="ajouter_briquet.php">
        <div class="card" style="width: 18.5vw; height: 51vh">
            <div class="card-body">
                <h1>Sertisseur</h1>
                <p class="card-text">Travaux en cours de sertissage</p>
            </div>
        </div>
    </a> 
</div>

<div class="card-container-bottom">
    <a href="other.php">
        <div class="bottom-card">
            <div class="card-body">
                <h1>Avancée générale</h1>
                <p class="card-text">Tout les bijoux en cours de création ou modifications</p>
            </div>
        </div>
    </a>
</div>

<?php
include '../phpFiles/footer.php';
?>