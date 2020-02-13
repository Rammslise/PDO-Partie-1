<?php
//création d'une nouvelle instance partant de la classe Client.
$client = new Client();
//récupération des 20 premiers clients de la liste.
$clientList = $client->getNumberClientList();
?>
