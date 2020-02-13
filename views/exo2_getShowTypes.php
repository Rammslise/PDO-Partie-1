<?php
require_once '../init/credentials.php';
require_once '../models/database.php';
require_once '../models/showTypes.php';
require_once '../controllers/exo2_getShowTypesCtrl.php';
include '../header.php';
?>
<div class="row">
    <div class="col-5">
      <div class="card border-primary mt-2 ml-2" style="max-width: 18rem;">
        <div class="card-header">PDO, Partie1, exercice2</div>
        <div class="card-body text-primary">
          <h5 class="card-title">Consigne</h5>
          <p class="card-text">Afficher tous les types de spectacles possibles.</p>
        </div>
      </div>
    </div>
    <div class="col-4 mt-2">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Types de Spectacles</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php foreach($showType as $show){ ?>
              <tr>
                <td>
                  <?= $show->id ?>
                </td>
                <td>
                  <?= $show->type ?>
                </td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
