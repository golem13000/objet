<?php

class Personnage {

public $nom;
public $force;
public $level;
public $hp;
public $vie;

public function caracteristique() {
    echo "le personnage $this->nom a une force de $this->force pour un level $this->level";

}
function etat() {
    if($this->hp >= 1) {
        $vie = "en vie";
    } else {
        $vie = "est mort";
    }

    return $vie;
}

}

$perso1 = new Personnage();
$perso2 = new personnage();
$perso3 = new personnage();

$perso1->nom = "Rose";
$perso1->force = 12;
$perso1->santé = 100;
$perso1->hp = 10;
$perso1->vie = 3;


$perso2->nom = "Golbu";
$perso2->force = 15;
$perso2->santé =100;
$perso2->hp = 5;
$perso2->vie = 1;

$perso3->nom = "Arthis";
$perso3->force = 13;
$perso3->santé = 100;
$perso3->hp = 0;
$perso3->vie = 0;

$perso1->$caracteristique;






var_dump($perso2);






?>