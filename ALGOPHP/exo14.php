<h1>Exercice 14</1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</2>

<?php

function Age($naissance, $datedujour){
    $date_naissance = DateTime::createFromFormat('d/m/Y', $naissance["Jour"]."/".$naissance["Mois"]."/".$naissance["Année"]);
    $date_dujour = DateTime::createFromFormat('d/m/Y', $datedujour["Jour"]."/".$datedujour["Mois"]."/".$datedujour["Année"]);

    $diff = $date_dujour->diff($date_naissance);
    
    return array('ans' => $diff->y, 'mois' => $diff->m, 'jours' => $diff->d);
}

$naissance = ["Jour" => 17, "Mois" => 01, "Année" => 1985];
$datedujour = ["Jour" => 21, "Mois" => 05, "Année" => 2018];

$age = Age($naissance, $datedujour);

echo "Age de la personne: " . $age['ans'] . " ans " . $age['mois'] . " mois " . $age['jours'] . " jours.";