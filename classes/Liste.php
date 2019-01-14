<?php
class Liste{

    private $id;
    private $data;

    public function __construct($id, $data)
    {
        $this->id = $id;
        $this->data = htmlentities(strip_tags($data));
    }

    private function getId() { return $this->id; }
    private function getData() { return $this->data; }

    public function display(){
        return "
        <form method='POST' action=''>
            <input type='hidden' name='id' value='".$this->getId()."'>
            <p>".$this->getData()."</p>
            <input type='submit' value='X'>
        </form>";
    }
}
?>