<?php

try{
  //création instance de connection
  $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //définition requête SQL.
  $query = 'SELECT * FROM clients';

  //query est une méthode qui transmet une requête à notre serveur de bdd
  $results = $db->query($query);

  //récupération de la liste des clients
  $clients = $results->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {
  die('Error :' . $e->getMessage());
}
//ferme automatiquement la connexion à la base de données
$db = null;
?>
