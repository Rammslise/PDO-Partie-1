<?php
require_once '../init/credentials.php';
require_once '../models/database.php';
require_once '../models/client.php';
require_once '../controllers/exo5_getClientNameCtrl.php';
include '../header.php';
?>
<div class="row">
  <div class="col-3 mr-0">
    <div class="card border-primary mt-2 ml-2" style="max-width: 18rem;">
      <div class="card-header">PDO, Partie1, exercice 5</div>
      <div class="card-body text-primary">
        <h5 class="card-title">Consigne</h5>
        <p class="card-text">Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
          Les afficher comme ceci :</br> Nom : Nom du client </br> Prénom : Prénom du client</br>Trier les noms par ordre alphabétique.</p>
      </div>
    </div>
  </div>
<div class="col-3">
  <?php foreach($clientList as $client){ ?>
    <div class="card-group text-center">
      <div class="card">
        <div class="card border-secondary mb-3" style="max-width: 18rem;">
          <div class="card-header">Id : <?= $client->id ?></div>
          <div class="card-body text-secondary">
            <h5 class="card-title">Nom : <?= $client->lastName ?></h5>
            <p class="card-text">Prénom : <?= $client->firstName ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
</div>
