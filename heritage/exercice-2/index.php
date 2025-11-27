<?php
class Character{

    protected int $life=0;
    protected string $name='tkt';

    public function __construct(){}

    public function getLife(){
        return $this->life;
    }

    public function setLife($life){
        $this->life = $life;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function introduce(){
        return 'Bonjour je m\'appelle '.$this->name;
    }
}

class Warrior extends Character{

    public function __construct(int $life, string $name, private int $energy){}
    
    public function getEnergy(){
        return $this->energy;
    }

    public function setEnergy($energy){
        $this->energy = $energy;
    }
}

class Mage extends Character{

    public function __construct(int $life, string $name, private int $mana){}

    public function getMana(){
        return $this->mana;
    }

    public function setMana($mana){
        $this->mana = $mana;
    }
}

$c = new Character(100, 'mon bro le character');
$w = new Warrior(20, 'tkt mon bro le warrior', 10);
$m = new Mage(10, 'tkt mon bro le mage', 50);

echo $c->introduce().'<br>' ;
echo $w->introduce().' '.$w->getLife().' '.$w->getEnergy().'<br>';

echo $m->introduce().' '.$m->getLife().' '.$m->getMana();


?>