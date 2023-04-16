<h1>Exercice 2</1>

<p>Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<h2>Résultat</h2>


<?php

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];

foreach($capitales as $pays => $capitale) {
    echo "$pays a pour capitale : $capitale<br>";
}

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    ksort($capitales);
    $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th>
                        </tr>
                    </thead>
                <tbody>";
    foreach($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}

// $capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];



// function TableauHTML($capitales) {
//     ksort($capitales);


//     echo "<table>";
//     echo "<tr><th>PAYS</th><th>CAPITALE</th></tr>";
//     foreach ($capitales as $ville => $capitale) {
//         echo "<tr><td>" .strtoupper($ville)."</td><td>$capitale</td></tr>";
//     }
//     echo "</table>";
// }

// TableauHTML($capitales);

// je n'ai pas trouver comme faire apparaitre les cellules  du coup je sais pas si j'ai bon ??
