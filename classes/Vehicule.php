<?php
abstract class Vehicule{
    private $id;
    private $marque;
    private $modele;

    protected function __construct(int $id, string $marque, string $modele)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
    }

    protected function getId()
    {
        return $this->id;
    }

    protected function getMarque()
    {
        return $this->marque;
    }

    protected function getModele()
    {
        return $this->modele;
    }

    abstract protected function displayContent();

    public function display(){
        echo "
        <form method='POST' action=''>
            <input type='hidden' name='id' value='".$this->getId()."'>
            <p>".$this->displayContent()."</p>
            <input type='submit' value='X'>
        </form>";
    }
}
?>