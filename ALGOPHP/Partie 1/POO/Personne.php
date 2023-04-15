<?php

class Personne{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;


    function __construct(string $nom, string $prenom, $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }

    public function getAge(){
        $now = new Datetime();
        $dateNaissance = new DateTime($this->_dateNaissance);
        $age = $now-> diff($dateNaissance)->y;
        return $age;
    }

}
