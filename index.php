<?php

class Personnage {

private $nom;
private $force;
private $level;
private $mort;
private $vie;
private $type;


function __construct(string $nom, int $force, int $level = 1) {
    $this->nom = $nom;
    $this->force = $force;
    $this->level  = $level;
    $this->setVie($health);
    $this->setEtat();
    $this->setType($type);
}


public function caracteristique() {
    $etat = ($this->mort)? "mort" : "vivant";
    echo $this->nom." a une force de " .$this->force. "pour un level" .$this->level." son etat de santé est de ".$this->vie."points/100, notre perso est donc " .$etat; 

}
function etat() {
    if($this->vie <=1) {
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

function getForce(): int {
    return $this->force;
}

function setForce(int $force) {
    $this->force = $force;

}

function getVie(): int {
    return $this->vie;
}

function setVie(int $vie) {
    $this->vie = $vie;
    if($this->vie < 1) {
        $this->setMort(true);
    } else {
        $this->setMort(false);
    }

}

function getLevel(): int {
    return $this->level;
}

function setLevel(int $level) {
    $this->level = $level;

}

function isMort(): bool {
    return $this->mort;
}

function setMort(int $mort) {
    $this->mort = $mort;

}

function levelUp() {
    $this->setLevel($this->getLevel()+1);
}

public function setType($type) {
    $this->type = $type;
}

 //function attaquer(personnage $perso) {
        //$perso->setVie($perso->getVie() - $this->force);
        //$perso->setMort();


}

 function tirer($perso) {
     $perso->setVie($perso->getVie() - $this->force);
     echo "L'archer vient de tirer sur le personnage et lui inflige des dégats"."<br>";
     $perso->setEtat();
 }

 function frapper($perso) {
     $perso->setVie($perso->getVie() - $this->force);
     echo "Le Guerrier vient de frapper le personnage et lui inflige des dégats"."<br>";
     $perso->setEtat();
 }
 
 function lancerSort($perso) {
    $perso->setVie($perso->getVie() - $this->force);
    echo "Le sorcier vient de lancer un sort sur le personnage et lui inflige des dégats"."<br>";
    $perso->setEtat();
 }    





}

$perso1 = new Personnage("Rose",12);
$perso2 = new personnage("Golbu",15, 1);
$perso3 = new personnage("Arthis",13,1);

$perso2->caracteristiques();
$perso1->attaquer($perso2);
$perso2->caracteristiques();



$perso1->setNom("Rose");
$perso1->setForce(12);
$perso1->setLevel(1);
$perso1->setVie(100);


$perso2->setNom("Golbu");
$perso2->setForce(15);
$perso2->setLevel(1);
$perso2->setVie(1);

$perso3->setNom("Arthis");
$perso3->setForce(13);
$perso3->setLevel(1);
$perso3->setVie(0);









