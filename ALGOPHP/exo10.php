<h1>Exercice 10</1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>

<h2>Résultat</2>

<?php

$aPayer = 152;
$verse = 200;
$resteAPayer = $verse - $aPayer;





echo "Montant à payer : ".$aPayer." €<br>";
echo "Montant versé : ".$verse." €<br>";
echo "Reste à payer : ".$resteAPayer." €<br>";
echo "****************************************<br>";
echo "Rendue de monnaie : <br>";