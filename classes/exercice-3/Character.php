<?php
require 'Weapon.php';

class Character{

    private Weapon $weapon;

    public function __construct(private string $name){
        $this->weapon = new Weapon('', 0);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getWeapon(){
        return $this->weapon;
    }

    public function setWeapon($name, $dmg){
        $this->weapon->setName($name);
        $this->weapon->setDamages($dmg);
    }

    public function fight(){
        return $this->weapon->strike();
    }
}
?>