<h1>Exercice 11</1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>

<h2>Résultat</h2>


<?php

$date = "2018-02-23";
echo ecrireDate($date);

function ecrireDate($date) {
    setlocale(LC_TIME, 'fr_FR');
    $dateTrans = DateTime::createFromFormat('Y-m-d', $date);
    return $dateTrans->format('l j F Y');
}
