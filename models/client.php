<?php
//clients hérite de la classe database avec extends.
class Client extends Database{
  //attributs de la classe client qui font référence aux noms des colonnes de la table clients.
  //seront utilisés lorsqu'on récupéra des données à partir de formulaires.
  public $id;
  public $lastName;
  public $firstName;
  public $birthDate;
  public $card;
  public $cardNumber;

  /*
  * connexion à la base de donnée
  *le constructeur hérite du construct de la classe parent
  */
  public function __construct(){
    parent::__construct();
  }

  /**
  * Fermeture automatique de la connexion, à la destruction de l'instance de classe
  */
  public function __destruct(){
    parent::__destruct();
  }

  /**
  * Exercice 1
  * méthode permettant de récupérer la liste de tous les clients.
  *@return
  */
  public function getClientList(){
    //définition requête SQL.
    $query = 'SELECT * FROM `clients`';
    //query est une méthode qui transmet une requête à notre serveur de bdd
    $results = $this->db->query($query);
    //récupération de la liste des clients
    return $results->fetchAll(PDO::FETCH_OBJ);
  }
  /**
  * Exercice 3
  * méthode permettant de récupérer les 20 premiers clients.
  *@return
  */
  public function getNumberClientList(){
    //définition requête SQL
    //query est une méthode qui transmet une requête à notre serveur de bdd
    $results = $this->db->query('SELECT `id`, `lastName`, `firstName` FROM `clients` LIMIT 20');
    //récupération de la liste des clients
    return $results->fetchAll(PDO::FETCH_OBJ);
  }
  /**
  * Exercice 4
  * méthode permettant de n'afficher que les clients ayant une carte de fidélité.
  *@return
  */
  public function getCardClientList(){
    $results = $this->db->query('SELECT `id`, `lastName`, `firstName`, `card` FROM `clients` WHERE `cardNumber` IS NOT NULL');
    return $results->fetchAll(PDO::FETCH_OBJ);
  }
  /**
  * Exercice 5
  * méthode permettant de n'afficher que les clients dont le NOM commence par la lettre "M".
  *@return
  */
  public function getClientName(){
    $results = $this->db->query('SELECT `id`, `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE "M%" ORDER BY `lastName`');
    return $results->fetchAll(PDO::FETCH_OBJ);
  }
  /**
   * Exercice 7
   * Méthode permettant de récupérer les informations concernant les clients
   */
  public function getClientInfo(){
    $results = $this->db->query('SELECT `lastName`, `firstName`, '
            .'DATE_FORMAT(`birthDate`, GET_FORMAT(DATE, "EUR")) AS `birthDate`,'
            .'CASE '
            . 'WHEN `card`=0 THEN "Non" '
            . 'ELSE "Oui" '
            .'END AS `card`, '
            .'`cardNumber` '
            .'FROM `clients` '
            .'ORDER BY `lastName`');
    return $results->fetchAll(PDO::FETCH_OBJ);
  }
}
?>
