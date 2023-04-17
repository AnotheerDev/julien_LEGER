<h1>Exercice 9</1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Monsieur","Madame","Mademoiselle"];

echo afficherRadio($nomsRadio);


function afficherRadio ($nomsRadio) {
    foreach ($nomsRadio as $nom) {
        echo '<label><input type ="radio" name="nomsRadio"';
        echo '> ' . $nom . '</label><br>';
    }
}