<?php
//création d'une nouvelle instance partant de la classe Client.
$client = new Client();
//récupération des clients qui ont le nom qui commence par M.
$clientList = $client->getClientName();
?>
