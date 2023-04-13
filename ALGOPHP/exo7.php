<h1>Exercice 7</1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

<h2>Résultat</h2>

<?php

$age = 10; 


if ($age >=6 && $age <=7) {
    echo "L'enfant appartient à la catégorie « Poussin » ";
} elseif ($age >=8 && $age <=9) {
    echo "L'enfant appartient à la catégorie « Pupille » ";
} elseif ($age >=10 && $age <=11) {
    echo "L'enfant appartient à la catégorie « Minime » ";
}elseif ($age >=12) {
    echo "L'enfant appartient à la catégorie « Cadet » ";
}elseif ($age <=6) {
    echo "Il n'y a pas de catégorie pour cet enfant";
}

