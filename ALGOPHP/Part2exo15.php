<h1>Exercice 15</1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php

$email = "contact@elan";

// Valider l'email
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail $email est valide";
  }else{
    echo "L'adresse e-mail $email n'est pas valide";
  }