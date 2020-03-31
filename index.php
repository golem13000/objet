<?php

class Personnage {
    protected $nom;
    protected $force;
    protected $level;
    protected $vie;
    protected $etat;
    protected $type;

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

    public function attaquer(Personnage $perso) {
        $perso->setEtat();
    }


}

class Guerrier extends Personnage {

    public function attaquer(Personnage $perso) {
        $this->frapper();
        $this->degats($perso);
        parent::attaquer($perso);
    }

    public function frapper() {
        echo $this->nom. " "."de type". " ".Guerrier::class. " ". "vient de frapper ce personnage et lui inflige des dégats"."<br>";
    }

    public function degats($perso) {
        $perso->setVie($perso->getVie() - 50);
    }

}

class Sorcier extends Personnage {
    
    public function attaquer(Personnage $perso) {
        $this->lancerSort();
        $this->degats($perso);
        parent::attaquer($perso);
    }

    public function lancerSort() {
        echo $this->nom. " "."de type". " ". Sorcier::class. " "."vient de lancer un sort contre ce personnage et lui inflige des dégats"."<br>";
    }

    public function degats($perso) {
        $perso->setVie($perso->getVie() - 100);
    }

}

class Archer extends Personnage {
   
    public function attaquer(Personnage $perso) {
        $this->tirer();
        $this->degats($perso);
        parent::attaquer($perso);      
    }

    public function tirer() {
        echo $this->nom. " "."de type". " ". Archer::class. " ". "vient de lancer plusieurs flèches contre ce personnage et lui inflige des dégats"."<br>";
    }

    public function degats($perso) {
        $perso->setVie($perso->getVie() - 40);
    }

}


$perso1 = new Archer("Rose", 12,2,100,"", "Archer");
$perso2 = new Sorcier("Golum",15,1,50,"","Sorcier");
$perso3 = new Guerrier("Rocky",6,1,0,"", "Guerrier");

// $perso1->caracteristiques();
// $perso2->caracteristiques();
// $perso3->caracteristiques();

// echo "Un niveau inférieur ";
// $perso2->caracteristiques();
// $perso2->levelUp($perso2);
// echo "Un niveau superieur ";;
// $perso2->caracteristiques();

echo "Avant l'attaque : ";
$perso1->caracteristiques();
$perso2->attaquer($perso1);
echo "Après l'attaque : ";
$perso1->caracteristiques();