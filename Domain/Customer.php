<?php
namespace Bookstore\Domain;

class Customer extends Person {

    private $id;
    private $email;

    public function __construct( $id, $firstname, $lastname, $email){

        parent::__construct($firstname, $lastname);

        $this->id = $id;
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

}
