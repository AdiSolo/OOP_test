<?php
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;

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
            $book = new Book('Osho', 'Igrahim', 3);
            $customer= new Customer( 1 , 'Alex', 'Gahirov', 'alex@mail.ro');

            echo $customer->getFirstName() . ' ' . $customer->getLastName();

            echo $customer->setLastName('Smith');

            echo $customer->getFirstName() . ' ' . $customer->getLastName();

?>

    </body>
</html>
