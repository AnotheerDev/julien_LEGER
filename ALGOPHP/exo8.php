<h1>Exercice 8</1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme : </p>

<h2>Résultat</h2>

<?php

// $num = 8;
// $multi = 1;

// echo "Table de $num : <br>";

// for ($i =0 ; $i <=10; $i++) {
//     $multi = $num * $i;
//     echo $num . " x " . $i . " = " . $multi . "<br>";
// }


$num = 8;
$multi = 1;
$i = 0;

echo " Table de $num : <br>";
while ($i <= 10) {
    $multi = $num * $i;
    echo $num . " x " . $i . " = " . $multi . "<br>";
    $i++;
}