<?php


class Voiture {
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private float $_vitesseActuelle = 0;
    private bool $_isDemarree = false;



    function __construct(string $_marque, string $_modele, int $_nbPortes, bool $_isDemarree) {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_isDemarree = $_isDemarree;
    }


    // getter et setter  pour chaque attribut de la classe Voiture
    public function getMarque() {
        return $this->_marque;
    }

    public function getModele() {
        return $this->_modele;
    }

    public function getNbPortes() {
        return $this->_nbPortes;
    }

    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;
    }

    public function getIsDemarree(){
        return $this->_isDemarree;
    }

    public function setMarque(string $_marque) {
        $this->_marque = $_marque;
    }

    public function setModele(string $_modele) {
        $this->_modele = $_modele;
    }

    public function setNbPortes(int $_nbPortes) {
        $this->_nbPortes = $_nbPortes;
    }

    public function setVitesseActuelle(float $_vitesseActuelle){
        $this->_vitesseActuelle = $_vitesseActuelle;
    }

    public function setIsDemarree(bool $_isDemarree){
        $this->_isDemarree = $_isDemarree;
    }



    // demarrer SI la voiture est TRUE
    public function demarrer() {
        if (!$this->_isDemarree){
            echo "Le véhicule " . $this->_marque . " " . $this->_modele . " démarre!<br>";
            $this->_isDemarree = true;  
        }else {
            echo "Je suis déjà démarrée.<br>";
        }
    }

    // fonction qui va permettre à la voiture d'accelerer selon la valeur qu'on va lui injecter
    public function accelerer($vitesse) {
        if ($this->_isDemarree){ 
            $this->_vitesseActuelle += $vitesse;
            echo "La vitesse du véhicule " . $this->_marque . " " . $this->_modele . " est de " . strval($this->_vitesseActuelle) . " km / h'<br>'";
        }else{
            echo "Pour accélerer il faut démarrer";
        }
    }


    // fonction qui va permettre à la voiture de s'arreter
    public function stopper($vitesse) {
        $this->_vitesseActuelle = 0;
        echo "Le véhicule " . $this->_marque . " " . $this->_modele . " est stoppé!<br>";
        echo "Le véhicule " . $this->_marque . " " . $this->_modele . " veut accélerer de ".strval($vitesse)." km/h !<br>";
        echo "Pour accélerer, il faut démarrer le véhicule " . $this->_marque . " " . $this->_modele . "!<br>";
    }


    // fonction qui donne la vitesse de la voiture
    public function vitesse() {
        echo "La vitesse du véhicule " . $this->_marque . " " . $this->_modele . " est de " . strval($this->_vitesseActuelle) ." km/h !<br>";
    }


    // fonction qui permet d'afficher les infos de la voiture demandée
    public function afficherInfo() {
        echo "Nom et modèle du véhicule : " . $this->_marque . " " . $this->_modele . "<br>";
        echo "Nombre de portes : " . $this->_nbPortes . "<br>";
        if($this->_vitesseActuelle != 0) {
            echo "Le véhicule " . $this->_marque . " est démarré<br>";
            }else{
            echo "Le véhicule " . $this->_marque . " est à l'arret<br>";
            }
            echo "Sa vitesse actuelle est de: " . strval($this->_vitesseActuelle) . " km/h<br>";
    }
}