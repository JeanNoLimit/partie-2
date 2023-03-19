<H1>Exercice13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. 
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :</p>
<h2>Résultat</h2>


<?php

class Voiture {

//attributs
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle=0;
    private int $_statut=0;
//Constructeur
    public function __construct(string $marque, string $modele, int $nbPortes){
        $this->_marque=$marque;
        $this->_modele=$modele;
        $this->_nbPortes=$nbPortes;

    }
//accesseurs (getter)
    public function getMarque(){
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;
    }
    public function getNbPortes(){
        return $this->_nbPortes;
    }

    public function getVitesse(){
        return $this->_vitesseActuelle;
    }
    public function getStatut(){
        return $this->_statut;
    }
//mutateurs (setter) 
    //changement de vitesse
    public function setVitesse(int $newVitesse){
        $this->_vitesseActuelle=$newVitesse;   
    }

    public function setStatut($newstatut){
        $this->_statut=$newstatut;
    }

//méthodes
    //démarrer
    public function demarrer(){
        if ($this->_statut==0){
            $this->setStatut(1);
            echo "le véhicule ". $this->getModele() ." démarre <br>";
        }
        else{
            echo"Le véhicule ". $this->getModele() ." est déja en marche<br>";
        }
    }
    //arrèter
    public function stopper(){
        if ($this->_statut==1){
            $this->setStatut(0);
            echo 'le vehicule '.$this->getModele().' est stoppé <br>';
        }
        else{
            echo"La voiture  ". $this->getModele() ." est déja à l'arrêt<br>";
        }
    }
    //accélerer
    public function accelerer($vitesse){
        if($this->_statut==0){
            echo "Le véhicule  ". $this->getModele() ." veut accélerer de". $vitesse . "km/h <br>";
            echo "Pour accélerer il faut démarrer le véhicule <br>";
        }
        else{
            $this->setVitesse($vitesse);
            echo "le véhicule  ". $this->getModele() . " accélère de ". $vitesse . "km/h <br>";
        }
        return $this->_vitesseActuelle;
    }



    //affichage état de la voiture

    public function getInfos(){
        //A FAIRE : afficher "véhicule 1" et "véhicule 2" 
        echo "<br>Infos véhicule <br> ****************** <br>";
        echo "Nom et modèle du véhicule : ". $this->getMarque()." ".$this->getModele() ."<br>";
        echo "Nombre de porte du véhicule : " . $this->getNbPortes()."<br>";
        if ($this->getStatut()==0){
            echo " le véhicule ".$this->getMarque()." est à l'arrêt<br>";
        }
        else {
            echo " le véhicule ".$this->getMarque()." est démarré <br>";
        }
        echo "sa vitesse actuelle est de ".$this->getVitesse()." km/h <br><br>";

    }

}

$v1= new Voiture("Peugeot","408",5);
$v2=new Voiture("Citroën","C4",3);


$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
echo "La vitesse actuelle de ". $v1->getModele()." est de ".$v1->getVitesse()." km/h <br>";
echo "La vitesse actuelle de ". $v2->getModele()." est de ".$v2->getVitesse()." km/h <br>";


$v1->getInfos();
$v2->getInfos();

 ?>