<?php
class ShowType extends Database{
//liste des attributs qui pourront être repris à l'affichage.
  public $id;
  public $type;

  public function __construct(){
    parent::__construct();
  }

  public function __destruct(){
    parent::__destruct();
  }

  public function getShowTypes(){
    $results = $this->db->query('SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title`');
    return $results->fetchAll(PDO::FETCH_OBJ);
  }
}
?>
