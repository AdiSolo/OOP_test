<?php
namespace Bookstore\Domain\Member;
use Bookstore\Domain\Customer;

    class Premium extends Customer{
        public function getMemberFee()
        {
            return 10;
        }

        public function getAmountBorrow()
        {
            return 12;
        }
    }
