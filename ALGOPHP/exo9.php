<h1>Exercice 9</1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</2>

<?php

$age = 32;
$sex = "F";

echo "Age : " . $age . "<br>";
echo "Sexe : " . $sex . "<br>";

$cond1 = ($age >=18 && $age <= 35 && $sex = "F");
$cond2 = ($age >=20 && $sex = "H");

if ($cond1 || $cond2) {
    echo "La personne est imposable.";
} else {
    echo "La personne n'est pas imposable.";
}