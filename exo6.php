<h1>exercice 6 </h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.</p>
<h2>resultat </h2>

<?php

function alimenterListeDeroulante($lDeroulante){
    $result='<form action="#" method="POST">
                <select>';
        foreach ($lDeroulante as $element){
            $result.='<option value="'.$element.'">'.$element.'</option>';
        }
    $result.='</select>
            </form>';
        return $result;
}


$elements = array("Monsieur","Madame","Mademoiselle");
echo alimenterListeDeroulante($elements);

?>