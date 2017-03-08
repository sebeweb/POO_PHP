<?php
//importe les different fichier
require("iClasse.php");
require("iRace.php");
require("Stats.php");
require("Orc.php");
require("Guerrier.php");
require("Archer.php");
require("Personnage.php");
/* création d'une nouvelle instance de Personage
 * Il prend en en parametre le nom et
 * une nouvelle instance des objects Orc et Guerrier
 */
$perso1 = new Personnage("Bob", new Orc(), new Guerrier());
//On passe par les accesseurs pour recuperer les propriete du nouveau personnage
echo $perso1->getNom();
echo $perso1->race->getNom();
echo $perso1->classe->getNom();
//Appel de nos interface qui sont implementé dans la classe et la race
$perso1->attaquer();
$perso1->seDeplacer();

$perso2 = new Personnage("Bill", new Orc(), new Archer());

$perso2->attaquer();

