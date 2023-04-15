<h1>Exercice 1</1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la fonction comme suit: convertirMajRouge($texte); </p>

<h2>Résultat</h2>

<?php

$texte = "mon texte en paramètre";

function convertirMajRouge($texte) {
    if ($texte == "mon texte en paramètre"){
        return "\033[1;31m" .strtoupper($texte). "\033[0m";
    }
}
echo $texte; 

