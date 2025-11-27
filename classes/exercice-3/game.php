<?php
require 'Character.php';

$c = new Character('Ragnar');
$w = new Weapon('Sword', 10);

$c->setWeapon($w->getName(), $w->getDamages());

echo $c->getName().' '.$c->getWeapon()->getName().' '.$c->getWeapon()->getDamages().'<br>'.$c->fight();
?>