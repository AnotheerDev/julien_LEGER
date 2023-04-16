<h1>Exercice 5</1>

<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.Exemple:$nomsInput = array("Nom","Prénom","Ville");afficherInput($nomsInput);</p>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Ville");
$formulaire = afficherInput($nomsInput);

function afficherInput($nomsInput) {
    $formulaire = "";
    foreach($nomsInput as $info) {
        $formulaire .= '<label for="' . $info .'">' . $info .':</label>';
        $formulaire .= '<br>';
        $formulaire .= '<input type="text id="' . $info . '" name="'. $info .'">';
        $formulaire .= '<br>';
    }
    return $formulaire;
}

echo $formulaire;