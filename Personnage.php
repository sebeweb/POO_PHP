<?php

/* 
 * une class est la structure de notre objet ici Personnage
 * L'objet Personnage herite des propriétéde la classe abstraite Stats
 */
class Personnage extends Stats {

//Initialisation de nos variable public pour les manipules on n'y a acces partout
    public $race = null;
    public $classe = null;

/*
 * Methode qui sera appelé lors de la creation d'une nouvelle instance de personnage
 * On met en parametre le nom la race et la classe
 */
    public function __construct($nom, $race, $classe) {
        $this->nom = $nom;
        $this->race = $race;
        $this->classe = $classe;
    }
    
//on implémente la méthode attaquer
    public function attaquer() {
        $this->classe->attaquer();
    }
    
//on implémente la méthode se deplacer
    public function seDeplacer() {
        $this->race->seDeplacer(2);
    }

    public function attendre() {
        
    }

    public function mourir() {
        
    }

}

