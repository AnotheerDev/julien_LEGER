<h1>Exercice 10</1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultat</h2>

<?php

$titres = ["Développeur Logiciel","Designer web","Intégrateur", "Chef de projet"];
$infoInput = ["Nom", "Prénom", "Adresse e-mail", "Ville", "Sexe"];
$formulaire = afficherInput($infoInput);

echo $formulaire;
echo afficherTitres($titres);
echo '<input type="submit" value="Validation" />';

function afficherInput($infoInput) {
    $formulaire = "";
    foreach($infoInput as $info) {
        $formulaire .= '<label for="' . $info .'">' . $info .':</label>';
        $formulaire .= '<br>';
        $formulaire .= '<input type="text id="' . $info . '" name="'. $info .'">';
        $formulaire .= '<br>';
    }
    return $formulaire;
}



function afficherTitres ($titres) {
    foreach ($titres as $titre) {
        echo '<label><input type ="radio" name="titres"';
        echo '> ' . $titre . '</label><br>';
    }
}