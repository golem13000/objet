<?php

class Personnage {

private $nom;
private $force;
private $level;
private $mort;
private $vie;


function __construct(string $nom, int $force, int $level = 1) {
    $this-> nom = $nom;
    $sthis->force = $force;
    $this->level  = $level;
}


public function caracteristique() {
    $etat = ($this->mort)? "mort" : "vivant";
    echo $this->nom." a une force de " .$this->force. "pour un level" .$this->level." son etat de santé est de ".$this->vie."points/100, notre perso est donc " .$etat; 

}
function etat() {
    if($this->vie < = 1) {
        $vie = "en vie";
    } else {
        $vie = "est mort";
    }

    return $vie;
}

function getNom(): string {
    return $this->nom;
}

function setNom(string $nom) {
    $this->nom = $nom;



}

}

$perso1 = new Personnage("Rose",12);
$perso2 = new personnage("Golbu",15, 1);
$perso3 = new personnage("Arthis",13,1);

echo $perso1->getNom();

$perso2->setNom("ralf");
echo $perso2->gerNom();


$perso1->nom = "Rose";
$perso1->force = 12;
$perso1->level = 1;
$perso1->mort = false;
$perso1->vie = 100;


$perso2->nom = "Golbu";
$perso2->force = 15;
$perso2->level =1;
$perso2->mort = false;
$perso2->vie = 1;

$perso3->nom = "Arthis";
$perso3->force = 13;
$perso3->level = 1;
$perso3->mort = true;
$perso3->vie = 0;

//$perso1->caracteristiques();







?>