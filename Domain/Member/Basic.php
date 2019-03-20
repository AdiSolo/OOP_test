<?php
namespace Bookstore\Domain\Member;
use Bookstore\Domain\Customer;

class Basic extends Customer {

    public function getMemberFee()
    {
        return 5;
    }

    public function getAmountBorrow()
    {
        return 2;
    }
}
