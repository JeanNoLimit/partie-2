<h1> Exercice 7 </h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.</p>
<h2> resultat </h2>

<?php

function genererCheckbox ($elements){
    $result="<form  action='#' method='POST'>";
    foreach ($elements as $element => $choix){
            $result.="<input type='checkbox' $choix> $element<br>";
    }
    $result.="</form>";
    return $result;
}


$monChoix = [
            "Choix 1" => "",
            "Choix 2" => "checked",
            "Choix 3" => "" 
        ];
echo genererCheckbox ($monChoix);
?>
