<h1>Exercice 13</1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. 
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :
</p>

<h2>Résultat</h2>



<?php

require "voiture.php";

$tuture1 = new Voiture("Peugeot", "408", 5, 0);
$tuture2 = new Voiture("Citroën", "C4", 3, 0);

echo "Info véhicule 1 :<br>";
echo "***********************<br>";
$tuture1->afficherInfo();

echo "_________________________________________<br>";

echo "Info véhicule 2 :<br>";
echo "***********************<br>";
$tuture2->afficherInfo();

