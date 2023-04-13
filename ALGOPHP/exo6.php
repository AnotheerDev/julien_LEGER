<h1>Exercice 6</1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</2>


<?php


$article = 9.99;
$quant = 5;
$tva = 0.2;
$payment = aPayer($article, $quant, $tva);

function aPayer($article, $quant, $tva) {
    $payment = ($article * $quant) * (1 + $tva);
    return $payment;
}
echo "Prix unitaire de l’article : $article <br>";
echo "Quantité : $quant <br>";
echo "Taux de TVA : $tva <br>";
echo "Le montant de la facture à régler est de : $payment<br>";