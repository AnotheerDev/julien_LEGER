<h1>Exercice 10</1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>

<h2>Résultat</2>

<?php

$aPayer = 152;
$verse = 200;
$resteAPayer = $verse - $aPayer;

// $nbBillets10 = int($resteAPayer / 10);
// $resteAPayer = $resteAPayer / 10;
// $nbBillets5 = int($resteAPayer / 5);
// $resteAPayer = $resteAPayer / 5;
// $nbPieces2 = int($resteAPayer / 2);
// $resteAPayer = $resteAPayer / 2;
// $nbPieces1 = $resteAPayer;

$nbBillets10 = intdiv($resteAPayer,10);
$reste = $resteAPayer - 10 * $nbBillets10;

$nbBillets5 = intdiv($reste,5);
$reste = $reste - 5 * $nbBillets5;

$nbPieces2 = intdiv($reste,2);
$reste = $reste - 2 * $nbPieces2;

$nbPieces1 = $reste;

echo $reste;





echo "Montant à payer : ".$aPayer." €<br>";
echo "Montant versé : ".$verse." €<br>";
echo "Reste à payer : ".$resteAPayer." €<br>";
echo "****************************************<br>";
echo "Rendue de monnaie : <br>";
echo $nbBillets10. " billets de 10 € - " .$nbBillets5." billets de 5 € - " .$nbPieces2. " pièces de 2 € - " .$nbPieces1. " pièces de 1 €";