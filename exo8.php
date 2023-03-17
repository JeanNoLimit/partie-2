<h1>Exercice 8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>
<h2>Resultat</h2>

<?php

function repeterImage ($url, $nbre){
    $result="";
        for ($i=0 ; $i<$nbre ; $i++){
            $result.='<img src="'.$url.'">';
    }
    return $result;
}
echo repeterImage ( "http://my.mobirise.com/data/userpic/764.jpg",4);
?>