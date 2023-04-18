<?php


class Voiture {
    protected string $_marque;
    protected string $_modele;


    function __construct(string $_marque, string $_modele) {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
    }


    // getter et setter  pour chaque attribut de la classe Voiture
    public function getMarque() {
        return $this->_marque;
    }

    public function getModele() {
        return $this->_modele;
    }


    

// function qui rattache toutes les infos 
    public function getInfos() {
        $info = "Nom et modèle du véhicule: " . $this->_marque . " " . $this->_modele . "<br>";

        return $info;
    }

}