<h1>Exercice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>
<h2>Resultat</h2>

<?php

function formaterDateFr (string $date){
    setlocale(LC_TIME, 'french');
    echo strftime('%A %d %B %Y', strtotime($date));

}
formaterDateFr ('2018-02-23');
?>