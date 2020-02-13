<?php
require_once '../init/credentials.php';
require_once '../models/database.php';
require_once '../models/client.php';
require_once '../controllers/exo4_getCardClientListCtrl.php';
include '../header.php';
?>
<div class="row">
  <div class="col-3 mr-0">
    <div class="card border-primary mt-2 ml-2" style="max-width: 18rem;">
      <div class="card-header">PDO, Partie1, exercice 4</div>
      <div class="card-body text-primary">
        <h5 class="card-title">Consigne</h5>
        <p class="card-text">N'afficher que les clients possédant une carte de fidélité.</p>
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
          <th scope="col">Carte</th>
        </tr>
      </thead>
      <tbody>
          <!-- Ouverture de la boucle foreach dans le tableau, permettant de récupérer les élèments de la liste -->
          <?php foreach($clientList as $client){ ?>
            <tr>
              <td>
                <?= $client->id ?>
              </td>
              <td>
                <?= $client->lastName ?>
              </td>
              <td>
                <?= $client->firstName ?>
              </td>
              <td>
                <?= $client->card ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
