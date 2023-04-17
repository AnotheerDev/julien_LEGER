<?php


class Voiture {
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_VitesseActuelle = 0;



    function __construct(string $_marque, string $_modele, $_nbPortes, $_VitesseActuelle) {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_vitesse = $_VitesseActuelle;
    }

    public function afficherInfo() {
        echo "Nom et modèle du véhicule : " . $this->_marque . " " . $this->_modele . "<br>";
        echo "Nombre de portes : " . $this->_nbPortes . "<br>";
    }

    // public function arret($_VitesseActuelle = null) {
    //     if(is_null($_VitesseActuelle)){                                                                  trouvez comment faire marcher ça huhu
    //         $this->$_VitesseActuelle = echo " La voiture est à l'arrêt <br>";
    //     }
    // }

    public function getMarque(){
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getNbPortes(){
        return $this->_nbPortes;
    }
}