<h1>Exercice 2</h1>
<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.</p>
<h2>Résultat</h2>

<?php
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

echo '<style>

table {
    border-collapse : collapse;

}
th {
    border : 1px solid black;
 }
td {
    border : 1px solid black;
    padding : 0px 15px;
}

</style>';
// + simple : on peut écrire <tabble border=1>. Renvoie un tableau avec bordure double.

function afficherTableHTML( array $capitales) {   
    ksort($capitales);
    $result= '<table>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                    <tr>
                </thead>
                <tbody>';
                    foreach($capitales as $pays => $capitale){
                        $result.='<tr>
                                    <td>'.strtoupper($pays).'</td>
                                    <td>'.ucfirst($capitale).'</td></tr>';
                    }
    $result.= "</table>";
    return $result;
}
echo afficherTableHTML($capitales);

?>