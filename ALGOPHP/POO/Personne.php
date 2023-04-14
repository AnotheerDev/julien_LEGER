<?php

class Personne{
    private $nom;
    private $prenom;
    private $dateNaissance;


    function __construct(string $nom, string $prenom, $dateNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getDateNaissance(){
        return $this->dateNaissance;
    }

    public function getAge(){
        $now = new Datetime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $age = $now-> diff($dateNaissance)->y;
        return $age;
    }

}
