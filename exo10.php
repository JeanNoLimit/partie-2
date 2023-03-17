<h1>Exercice 10 </h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit)</p>
<h2>Resultat</h2>

<?php

function afficherInput($nomsInput){
    $result= '';
    foreach ($nomsInput as $input){
        $minInput = mb_strtolower($input);
        $result.="<label for='$minInput'>$input</label><br>
                  <input type='text' name='$minInput' id='$minInput'><br>";
    }
    return $result;
}

function afficherRadio($nomRadio){
    $result="";
    foreach ($nomRadio as $element){
        $result.="<input type ='radio' name='radio' value='$element' id='$element'>
                    <label for='$element'>$element</label><br>";
    }
    return $result;
}

function creationFormulaire($informations, $choixFormation){
    $result='<form action="#" method="POST">
                <fieldset>
                    <legend>Informations Personelles</legend>';
    $result.=afficherInput($informations);
    $result.='</fieldset>
                <fieldset>
                    <legend>Choix de la formation</legend>';
    $result.=afficherRadio($choixFormation);
    $result.='</fieldset>
              <input type="submit" value"Envoyer le formulaire">
              </form>';

    return $result;
}

$input = ["Nom","Prénom","Ville","adresse e-mail","ville","sexe"];
$radio = ["Développeur Logiciel", "Designer web","Intégrateur" ,"Chef de projet"];
echo creationFormulaire($input, $radio);

?>