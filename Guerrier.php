<?php
//L'objet Guerrier herite des propriete de la classe abstraite Stats
class Guerrier extends Stats implements iClasse {
//Défini le nom de la classe lors d'une nouvelle istance
  public function __construct() {
    $this->nom = "Guerrier";
  }
//l'implemtations de iClasse nous permet d'appeler notre méthode attaquer
  public function attaquer() {
    echo " attaque";
  }

}
