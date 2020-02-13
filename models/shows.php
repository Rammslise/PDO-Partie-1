<?php
class Show extends Database{
  public $id;
  public $title;
  public $performer;
  public $date;
  public $showTypesId;
  public $firstGenresId;
  public $secondGenreId;
  public $duration;
  public $startTime;

  public function __construct(){
    parent::__construct();
  }
  public function __destruct(){
    parent::__destruct();
  }

  /**
  * Exercice 6
  * méthode permettant d'afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure.
  *Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.
  *@return
  */
  public function getShowInfo(){
    $results = $this->db->query('SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title`');
    return $results->fetchAll(PDO::FETCH_OBJ);
  }
}
?>
