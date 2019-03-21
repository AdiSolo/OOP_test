<?php
namespace Bookstore\Domain;

 abstract class Customer extends Person {

    private $id;
    private $email;

    public function __construct( $id, $firstname, $lastname, $email,  $address){

        parent::__construct($firstname, $lastname, $address);

        $this->id = $id;
        $this->email = $email;
    }

    abstract public function getMemberFee();
    abstract public function getAmountBorrow();

    public function getEmail()
    {
        return $this->email;
    }

}
