<?php
require 'Character.php';

$c = new Character(1);

echo $c->getFullName().'<br>';

$c->setfirstName('Sarah');
$c->setlastName('Connor');

echo $c->getFullName();
?>