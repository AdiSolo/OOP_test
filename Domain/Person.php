<?php

namespace Bookstore\Domain;

class Person {

    protected $firstname;
    protected $lastname;

    public function __construct($firstname, $lastname){
        $this->firstname = $firstname;
        $this->lastname =  $lastname;
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
}
