<?php


class Voitureelec extends Voiture {
    private int $_autonomie;


    function __construct(string $_marque, string $_modele, int $_autonomie) {
        parent::__construct($_marque, $_modele);
        $this->_autonomie = $_autonomie;
    }


    // getter et setter  pour chaque attribut de la classe Voiture
    public function getMarque() {
        return $this->_marque;
    }

    public function getModele() {
        return $this->_modele;
    }

    public function getAutonomie(){
        return $this->_autonomie;
    }


    
    // function qui rattache toutes les infos 
    public function getInfos() {
        $info =  "Nom et modèle du véhicule éléctrique: ".$this->_marque." ".$this->_modele.", autonomie de ".strval($this->_autonomie)." km.<br>";
        return $info;
    }
}