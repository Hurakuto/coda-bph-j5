<?php
require 'connexion.php';

class User{

    private ? int $id;

    public function __construct(private string $firstName, private string $lastName, private string $email){}

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getfirstName(){
        return $this->firstName;
    }

    public function setfirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getlastName(){
        return $this->lastName;
    }

    public function setlastName($lastName){
        $this->lastName = $lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}
?>