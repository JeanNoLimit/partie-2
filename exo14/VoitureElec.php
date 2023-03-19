<?php

Class VoitureElec extends Voiture{

    private int $_autonomie;

    public function __construct(string $marque, string $modele, int $autonomie){
        //permet d'appeler le constructeur parent 
        parent::__construct($marque, $modele);
        $this->_autonomie=$autonomie;
               
    }

    public function getAutonomie(){
        return $this->_autonomie;
    }
    public function getInfos():String {
        return $this->getMarque(). " " . $this->getModele(). " a une autonomie de  ".$this->getAutonomie() . "%";
    }
}

?>