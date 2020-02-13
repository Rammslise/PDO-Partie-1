<?php
require_once '../init/credentials.php';
require_once '../models/database.php';
require_once '../models/client.php';
require_once '../controllers/exo3_getNumberClientListCtrl.php';
include '../header.php';
?>
<div class="row">
    <div class="col-3 mr-0">
      <div class="card border-primary mt-2 ml-2" style="max-width: 18rem;">
        <div class="card-header">PDO, Partie1, exercice 3</div>
        <div class="card-body text-primary">
          <h5 class="card-title">Consigne</h5>
          <p class="card-text">Afficher les 20 premiers clients.</p>
        </div>
      </div>
    </div>
    <div class="col-5 mt-2">
      <p class="h2">Liste des clients</p>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
          </tr>
        </thead>
        <tbody>
            <!-- Ouverture de la boucle foreach dans le tableau, permettant de récupérer les élèments de la liste -->
            <?php foreach($clientList as $client){ ?>
              <tr>
                <th scope="row"><?= $client->id ?></th>
                <td><?= $client->lastName ?></td>
                <td><?= $client->firstName ?></td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
