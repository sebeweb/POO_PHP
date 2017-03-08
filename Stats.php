<?php

//super classe qui sera appliqué par les classes qui l'etendent
abstract class Stats {

// Initialisation des propriété qui on une visibilité protected
    protected $nom = "test";
    protected $pdv = 0;
    protected $atk = 0;
    protected $def = 0;

// Initialisation de notre accesseur qui retourne notre propriete nom
    public function getNom() {
        return $this->nom;
    }

    /* Initialisation de notre accesseur qui permet d'atribuer une valeurs nom a
     * notre propriete
     */

    public function setNom($nom) {
        $this->nom = $nom;
    }

}
