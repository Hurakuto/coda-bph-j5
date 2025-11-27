<?php
class Character{

    private string $firstName = 'Jane';
    private string $lastName = 'Doe';

    public function __construct(private int $id){

    }

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

    public function getFullName(){
        return $this->firstName.' '.$this->lastName;
    }
}
?>