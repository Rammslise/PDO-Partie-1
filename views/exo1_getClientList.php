<?php
require_once '../init/credentials.php';
require_once '../models/database.php';
require_once '../models/client.php';
require_once '../controllers/exo1_getClientListCtrl.php';
include '../header.php';
?>
<p class="h2">Liste des clients</p>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>id</th>
      <th>Nom</th>
      <th>Prénom</th>
    </tr>
  </thead>
  <tbody>
    <!-- Ouverture de la boucle foreach -->
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
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php include '../footer.php'; ?>
