<h1>Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : 
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau<p>

<?php
function affichage (array $tableau){

   foreach($tableau as $cle => $valeur){
        
        $result=var_dump($valeur);
          echo "<br>";

   }

    return $result;
}

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
echo affichage($tableauValeurs);

?>

