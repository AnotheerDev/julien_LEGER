<h1>Exercice 8</1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
</p>

<h2>Résultat</h2>

<?php


$lienImage = 'http://my.mobirise.com/data/userpic/764.jpg';
$nbImage = 4;

echo afficherImage($lienImage, $nbImage);

function afficherImage ($lienImage, $nbImage) {
    for ($i = 0; $i < $nbImage; $i++) {
        echo '<img src= "' . $lienImage .'">';
    }
}