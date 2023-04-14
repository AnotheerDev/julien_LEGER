<h1>Exercice 11</1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</2>


<?php

$marque = array ("Peugeot", "Renault","BMW", "Mercedes");

echo "Il y a 4 marques de voitures dans le tableau :";
echo "<ul>";
foreach ($marque as $ma){
    echo "<li>".$ma."</li>"; 
}
echo "</ul>";

