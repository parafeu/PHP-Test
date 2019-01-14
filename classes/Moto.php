<?php
include "Vehicule.php";

class Moto extends Vehicule{

    private $couleur;
    private $type;

    public function __construct(int $id, string $marque, string $modele, string $couleur, string $type)
    {
        parent::__construct($id, $marque, $modele);
        $this->couleur = $couleur;
        $this->type = $type;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function getType(): string
    {
        return $this->type;
    }

    protected function displayContent()
    {
        return "<i class='material-icons'>motorcycle</i>".$this->getMarque()." ".$this->getModele()." ".$this->getCouleur()." ".$this->getType();
    }
}
?>