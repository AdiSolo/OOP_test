<?php
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Member\Basic;
use Bookstore\Domain\Member\Premium;

function autoloader($classname)
{
    $lastslash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastslash);
    $directory = str_replace('\\', '/', $classname);
    $filename  = __DIR__ . '/' . $directory . '.php';

    require_once $filename;
}

spl_autoload_register('autoloader');

?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Test OOP</title>
    </head>
    <body>
<?php

            function checkIfValid( Customer $customer, $books )
            {
                return $customer->getAmountBorrow() >=  count($books);
            }


            $book = new Book('Osho', 'Igrahim', 3);
            $book1 = new Book('Osho', 'Igrahim', 3);
            $book2 = new Book('Osho', 'Igrahim', 3);
            $book3 = new Book('Osho', 'Igrahim', 3);

            $customer= new Basic( 1 , 'Alex', 'Gahirov', 'alex@mail.ro');

            // echo $customer->getFirstName() . ' ' . $customer->getLastName();
            //
            // echo $customer->setLastName('Smith');
            //
            // echo $customer->getFirstName() . ' ' . $customer->getLastName() . '<br>';
            //
            var_dump(checkIfValid($customer, [$book, $book2, $book3]));

            var_dump($book->getBook());



 ?>

    </body>
</html>
