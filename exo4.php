<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>
<h2>Resultat</h2>

<?php 
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");




function afficherTableLien( array $capitales) {
    
    ksort($capitales);
    $result= '<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                        <th>Liens</th>
                    <tr>
                </thead>
                <tbody>';
                    foreach($capitales as $pays => $capitale){
                        $result.='<tr>
                                    <td>'.strtoupper($pays).'</td>
                                    <td>'.ucfirst($capitale).'</td>
                                    <td><a href="http://fr.wikipedia.org/wiki/'.$capitale.'" target="_blank">lien</a>
                                </tr>';

                    }
    $result.= "</table>";
    return $result;

}
echo afficherTableLien($capitales);

?>