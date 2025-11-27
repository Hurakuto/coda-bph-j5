<?php
require 'User.php';

$admin = new User(1, 'admin', 'admin');
$user = new User(2, 'user', 'user');

echo $admin->getId().' '.$admin->getUsername().' '.$admin->getPassword().'<br>';
echo $user->getId().' '.$user->getUsername().' '.$user->getPassword();
?>