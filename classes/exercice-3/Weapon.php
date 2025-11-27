<?php
class Weapon{

    public function __construct(private string $name, private int $damages){

    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getDamages(){
        return $this->damages;
    }

    public function setDamages($damages){
        $this->damages=$damages;
    }

    public function strike(){
        return "Mais aïeuh! <br>";
    }
}
?>