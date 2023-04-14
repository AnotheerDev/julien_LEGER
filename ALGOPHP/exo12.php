<h1>Exercice 11</1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<h2>Résultat</2>

<?php


// $langues = ["Mickaël" => "FRA" , "Virgile" => "ESP", "Marie-claire" => "ENG"];

// ksort($langues);
// foreach ($langues as $prenom => $langue) {
//     if  ($langue == "FRA") {
//             echo "Salut $prenom";
//     }   elseif ($langue == "ESP") {
//             echo "Hola $prenom";
//     }   elseif ($langue == "ENG") {
//          echo "Hello $prenom";
//     }
// } 

$langues = ["Mickaël" => "FRA" , "Virgile" => "ESP", "Marie-claire" => "ENG"];
$salutations = ["FRA" => "Salut", "ESP" => "Hola", "ENG" => "Hello"];


foreach ($langues as $prenom => $langue) {
    echo $salutations[$langue]." ".$prenom."<br>";
}