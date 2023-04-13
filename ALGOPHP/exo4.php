<h1>Exercice 4</1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</2>

<?php

$palin = "Engage le jeu que je le gagne";

function estUnPalindrome($palin) {
    $palin = preg_replace("/[^A-Za-z0-9]/", "", $palin);
    $palin = strtolower($palin);
    return $palin === strrev($palin);
}

if (estUnPalindrome($palin)) {
    echo "La phrase « $palin » est palindrome";
}
else {
    echo "«La phrase « $palin » n'est pas palindrome»";
}