<?php
require_once '../init/credentials.php';
require_once '../models/database.php';
require_once '../models/client.php';
require_once '../controllers/exo7_getClientInfoCtrl.php';
include '../header.php';
?>
<div class="row">
    <div class="col-3 mr-0">
        <div class="card border-primary mt-2 ml-2" style="max-width: 18rem;">
            <div class="card-header">PDO, Partie1, exercice 7</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Consigne</h5>
                <p class="card-text">Afficher tous les clients comme ceci : 
                    Nom, Prénom, Date de naissance, Carte de fidélité (Oui ou Non), Numéro de Carte.</p>
            </div>
        </div>
    </div>
    <div class="col-7 mt-2">
        <h2>Liste des clients</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Carte de fidélité</th>
                    <th scope="col">Numéro de carte</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ClientList as $client) { ?>
                    <tr>
                        <td>
                            <?= $client->lastName ?>
                        </td>
                        <td>
                            <?= $client->firstName ?>
                        </td>
                        <td>
                            <?= $client->birthDate ?>
                        </td>
                        <td>
                            <?= $client->card ?>
                        </td>
                        <td>
                            <?= $client->cardNumber ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div> 

