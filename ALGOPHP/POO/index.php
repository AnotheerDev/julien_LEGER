<h1>Exercice 15</1>

<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>

<h2>Résultat</2>

<?php

require "Personne.php";

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->getPrenom() ." ". $p1->getNom() ." a ". $p1->getAge() ." ans.<br>";
echo $p2->getPrenom() ." ". $p2->getNom() ." a ". $p2->getAge() ." ans.<br>";
