<?php

  class Archer extends Stats implements iClasse {

    public function __construct() {
      $this->nom = "Archer";
    }

    public function attaquer() {
      echo " tire une flèche";
    }

  }

