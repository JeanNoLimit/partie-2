<h1>Exercice 15 </h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.</p>
<h2>Résultat</h2>

<?php

function verificationEmail (string $email){
    $display="";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $display="l'adresse<strong> $email</strong> est une adresse mail valide. <br>";
    }
    else {
        $display="l'adresse<span style='font-weight: bold'> $email</span> est une adresse mail invalide. <br>";
    }
    return $display;
}
echo verificationEmail("elan@elan-formation.fr");
echo verificationEmail("coutact@elan");
// Filter_var permet de filtrer une variable avec un filtre spécifique, FILTER_VALIDATE_EMAIL.

?>