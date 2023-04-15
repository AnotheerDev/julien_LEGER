<h1>Exercice 1</1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la fonction comme suit: convertirMajRouge($texte); </p>

<h2>Résultat</h2>

<?php

$texte = "mon texte en paramètre";

function convertirMajRouge($texte) {
    if ($texte == "mon texte en paramètre"){
        return "<span style='color:red; text-transform:uppercase;'>".$texte."</span>";
    }
}

echo convertirMajRouge($texte); 