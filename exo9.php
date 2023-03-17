<h1>Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")</p>
<h2>Resultat</h2>

<?php

function afficherRadio($nomRadio){
    $result="<form action='#' method='POST'>";
    foreach ($nomRadio as $element){
        $result.="<input type ='radio' name='radio' value='$element' id='$element'>
                    <label for='$element'>$element</label><br>";
    }
    return $result;
}
$nomRadio=array("Masculin","Féminim","autre");
echo afficherRadio($nomRadio);
?>