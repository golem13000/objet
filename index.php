<?php

class Guerrier {
    private $nom;
    private $force;
    private $level;
    private $vie;
    private $etat;
    private $type;

    public function __construct(string $nom, int $force, int $level=1,int $vie, string $etat, string $type){
        $this->setNom($nom);
        $this->setForce($force);
        $this->setLevel($level);
        $this->setVie($vie);
        $this->setEtat();
        $this->setType($type);
    }

    public function caracteristiques() {
        
        echo "Le personnage" . " ". $this->nom ." ". "a une force de " ." ". $this->force . "."
        ."Il est de niveau"." ". $this->level ." ". "et il a une santé de " ." ". $this->vie ."."." ". "Il est" ." ". $this->setEtat()."."." "."Il est de type". " ". $this->type."."." "."<br>";
    }

    public function setEtat() {
        if ($this->vie >=1) {
            $etat = "vivant";
        }else {
            $etat = "mort";
        }
        return $etat;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getForce() {
        return $this->force;
    }

    public function setForce($force) {
        $this->force = $force;
    }

    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function getVie() {
        return $this->vie;
    }

    public function setVie($vie) {
        $this->vie = $vie;
    }
    
    public function getEtat() {
        return $this->etat;
    }

    public function levelUp() {
        $this->setLevel($this->getLevel()+1);
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function frapper($perso) {
        $perso->setVie($perso->getvie() - $this->force);
        echo "Le Guerrier vient de frapper le personnage et lui inflige des dégats"."<br>";
        $perso->setEtat();
    }

    public function attaquer($perso) {
        $perso->setVie($perso->getVie() - $this->force);
        echo "Le Guerrier vient de lancer une attaque contre le personnage et lui inflige des dégats"."<br>";
        $perso->setEtat();
    }

}

class Sorcier {
    private $nom;
    private $force;
    private $level;
    private $vie;
    private $etat;
    private $type;

    public function __construct(string $nom, int $force, int $level=1,int $vie, string $etat, string $type){
        $this->setNom($nom);
        $this->setForce($force);
        $this->setLevel($level);
        $this->setVie($vie);
        $this->setEtat();
        $this->setType($type);
    }

    public function caracteristiques() {
        
        echo "Le personnage" . " ". $this->nom ." ". "a une force de " ." ". $this->force . "."
        ."Il est de niveau"." ". $this->level ." ". "et il a une santé de " ." ". $this->vie ."."." ". "Il est" ." ". $this->setEtat()."."." "."Il est de type". " ". $this->type."<br>";
    }

    public function setEtat() {
        if ($this->vie >=1) {
            $etat = "vivant";
        }else {
            $etat = "mort";
        }
        return $etat;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getForce() {
        return $this->force;
    }

    public function setForce($force) {
        $this->force = $force;
    }

    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function getVie() {
        return $this->vie;
    }

    public function setVie($vie) {
        $this->vie = $vie;
    }
    
    public function getEtat() {
        return $this->etat;
    }

    public function levelUp() {
        $this->setLevel($this->getLevel()+1);
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function attaquer($perso) {
        $perso->setVie($perso->getVie() - $this->force);
        echo "Le Sorcier vient de lancer une attaque contre le personnage et lui inflige des dégats"."<br>";
        $perso->setEtat();
    }

    public function lancerSort($perso) {
        $perso->setVie($perso->getVie() - $this->force);
        echo "Le Sorcier vient de lancer un sort contre le personnage et lui inflige des dégats"."<br>";
        $perso->setEtat();
    }
}

class Archer {
    private $nom;
    private $force;
    private $level;
    private $vie;
    private $etat;
    private $type;

    public function __construct(string $nom, int $force, int $level=1,int $vie, string $etat, string $type){
        $this->setNom($nom);
        $this->setForce($force);
        $this->setLevel($level);
        $this->setVie($vie);
        $this->setEtat();
        $this->setType($type);
    }

    public function caracteristiques() {
        
        echo "Le personnage" . " ". $this->nom ." ". "a une force de " ." ". $this->force . "."
        ."Il est de niveau"." ". $this->level ." ". "et il a une santé de " ." ". $this->vie ."."." ". "Il est" ." ". $this->setEtat()."."." "."Il est de type". " ". $this->type."<br>";
    }

    public function setEtat() {
        if ($this->vie >=1) {
            $etat = "vivant";
        }else {
            $etat = "mort";
        }
        return $etat;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getForce() {
        return $this->force;
    }

    public function setForce($force) {
        $this->force = $force;
    }

    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function getVie() {
        return $this->vie;
    }

    public function setVie($vie) {
        $this->vie = $vie;
    }
    
    public function getEtat() {
        return $this->etat;
    }

    public function levelUp() {
        $this->setLevel($this->getLevel()+1);
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function attaquer($perso) {
        $perso->setVie($perso->getVie() - $this->force);
        echo "L'Archer vient de lancer une attaque contre le personnage et lui inflige des dégats"."<br>";
        $perso->setEtat();
    }

    public function tirer($perso) {
        $perso->setVie($perso->getVie() - $this->force);
        echo "L'Archer vient de lancer plusieurs flèches contre le personnage et lui inflige des dégats"."<br>";
        $perso->setEtat();
    }

}


$perso1 = new Archer("Rose", 12,2,100,"", "Archer");
$perso2 = new Sorcier("Golum",15,1,50,"","Sorcier");
$perso3 = new Guerrier("Rocky",6,1,0,"", "Guerrier");

$perso1->caracteristiques();
$perso2->caracteristiques();
$perso3->caracteristiques();

echo "Un niveau inférieur ";
$perso2->caracteristiques();
$perso2->levelUp($perso2);
echo "Un niveau superieur ";;
$perso2->caracteristiques();

echo "Avant l'attaque : ";
$perso2->caracteristiques();
$perso1->attaquer($perso2);
echo "Après l'attaque : ";
$perso2->caracteristiques();