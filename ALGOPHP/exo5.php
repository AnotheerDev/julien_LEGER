<h1>Exercice 5</1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>


<h2>Résultat</h2>


<?php

$franc = 100;
$euro = convert($franc);

function convert($franc) {
    $euro = number_format(($franc / 6.55957),2);
    return $euro;
}

echo "Montant en francs : $franc <br>";
echo " $franc francs = $euro € <br>";