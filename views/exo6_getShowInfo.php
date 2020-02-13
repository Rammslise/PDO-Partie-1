<?php
require_once '../init/credentials.php';
require_once '../models/database.php';
require_once '../models/shows.php';
require_once '../controllers/exo6_getShowInfoCtrl.php';
include '../header.php';
?>
<div class="row">
    <div class="col-3 mr-0">
        <div class="card border-primary mt-2 ml-2" style="max-width: 18rem;">
            <div class="card-header">PDO, Partie1, exercice 6</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Consigne</h5>
                <p class="card-text">Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique.  
                    Afficher les résultat comme ceci : </br> Spectacle par artiste, le date à heure.</p>
            </div>
        </div>
    </div>
    <div class="col-3">
        <?php foreach ($showList as $shows) { ?>
            <div class="card-group text-center">
                <div class="card">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><?= $shows->title?></div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Par : <?= $shows->performer ?></h5>
                            <p class="card-text">Le <?= $shows->date ?>, à <?= $shows->startTime?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div> 
