<h1>Exercice 7</1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résultat</h2>


<?php

$elements = ["Choix 1" => false, "Choix 2" => true, "Choix 3" => false];

echo genererCheckbox($elements);


function genererCheckbox($elements) {
    foreach ($elements as $element => $boo) {
        echo '<label><input type ="checkbox" name="' . $element . '"';
        if ($boo) {
            echo " checked";
        }
        echo '> ' . $element . '</label><br>';
        }
    }