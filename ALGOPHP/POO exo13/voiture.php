<?php


class Voiture {
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_VitesseActuelle;



    function __construct(string $_marque, string $_modele, $_nbPortes) {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_vitesse = $_VitesseActuelle;
    }
}