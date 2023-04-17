<h1>Exercice 6</1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple:$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements) {
    $result = '<select>
            <option selected="selected">Dénomination</option> ';
    
    foreach ($elements as $deno) {
        $result .= '<option value="' . strtolower($deno) .'">' . $deno . '</option>';
    }

    $result .= "</select>";
    return $result;
}
