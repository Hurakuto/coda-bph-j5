<?php
require 'User.php';
require 'connexion.php';

$superman = new User('Clark', 'Kent', 'clark.kent@test.fr'); //-> Etape 3

// $query = $db->prepare('SELECT * FROM users LIMIT 1');
// $query->execute();
// $user = $query->fetch(PDO::FETCH_ASSOC);

// $first_user = new User($user['first_name'], $user['last_name'], $user['email']); -> Etape 4

$query = $db->prepare('SELECT * FROM users');
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($users as $user){
    new User($user['first_name'], $user['last_name'], $user['email']); //-> Etape 5
}


$query = $db->prepare("INSERT INTO users (first_name, last_name, email) VALUES (:firstname, :lastname, :email)"); 

$parameters = [
    'firstname' => $superman->getfirstName(),
    'lastname' => $superman->getlastName(),
    'email' => $superman->getEmail()
];

$query->execute($parameters);

$id = $db->lastInsertId();

$superman->setId($id);
?>