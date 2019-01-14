<?php
include 'Vehicule.php';

class Voiture extends Vehicule{

    private $couleur;

    public function __construct(int $id, string $marque, string $modele, string $couleur)
    {
        parent::__construct($id, $marque, $modele);
        $this->couleur = $couleur;
    }

    private function getCouleur(): string
    {
        return $this->couleur;
    }

    protected function displayContent()
    {
        return "<i class='material-icons'>directions_car</i>".$this->getMarque()." ".$this->getModele()." ".$this->getCouleur();
    }

}
?>