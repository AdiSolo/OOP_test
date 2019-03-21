<?php

namespace Bookstore\Domain;

class Person {

    protected $firstname;
    protected $lastname;
    protected $address;

    public function __construct($firstname, $lastname, $address){
        $this->firstname = $firstname;
        $this->lastname =  $lastname;
        $this->address = $address;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function sayHi()
    {
        return "Hello" . $this->firstname;
    }
}
