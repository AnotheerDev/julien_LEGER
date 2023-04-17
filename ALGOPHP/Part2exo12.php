<h1>Exercice 12</1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : 
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau</p>

<h2>Résultat</h2>

<?php

$tableauValeurs = array(true,"texte",10,25.369,array("valeur1","valeur2"));

foreach ($tableauValeurs as $valeur) {
    $type = gettype($valeur);
    echo var_export($valeur, true) ." (" . $type . ")<br>";
}
