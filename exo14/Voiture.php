<?php
Class Voiture {

    private string $_marque;
    private string $_modele;

    public function __construct(string $marque,string $modele){
        $this->_marque=$marque;
        $this->_modele=$modele;

    }

    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getInfos():String {
        return $this->getMarque(). " " . $this->getModele();
    }
}


?>