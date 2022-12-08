<?php
$title = 'Accueil';
$h1 = 'Accueil';
include 'phpFiles/header.php';
?>

<div class="card-container">
    <a href="services.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Services</h1>
                <p class="card-text">Création, Révision et Estimation</p>
            </div>
        </div>
    </a>
    <a href="historique.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Historique</h1>
                <p class="card-text">Consultez l'avancée des bijoux</p>
            </div>
        </div>
    </a>
    <a href="vitrinePro.php">
        <div class="card" style="width: 23.5vw; height: 51vh">
            <div class="card-body">
                <h1>Vitrine</h1>
                <p class="card-text">Consultez les bijoux en vente</p>
            </div>
        </div>
    </a>
</div>

<div class="card-container-bottom">
    <a href="other.php">
        <div class="bottom-card">
            <div class="card-body">
                <h1>Autres</h1>
                <p class="card-text">Créez des clients, ajoutez des matériaux...</p>
            </div>
        </div>
    </a>
</div>

<?php
include 'phpFiles/footer.php';
