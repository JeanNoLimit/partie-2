<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.</p>
<h2>Resultat</h2>

<?php


function afficherInput($nomsInput){
    $result= '<form action="#" method="POST">';
    foreach ($nomsInput as $input){
        $minInput = mb_strtolower($input);
        $result.="<label for='$minInput'>$input</label><br>
                  <input type='text' name='$input' id='$input'><br>";
    }
    $result.= '</form>';
    return $result;
}

$nomsInput = array("Nom","Prénom","Ville");
echo afficherInput($nomsInput);


?>