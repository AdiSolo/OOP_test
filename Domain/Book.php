<?php
namespace Bookstore\Domain;
class Book {
    public $title;
    public $author;
    public $edition;

    public function __construct($title, $author, $edition)
    {
        $this->title = $title;
        $this->author = $author;
        $this->edition = $edition;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function getBook()
    {
        return "The book title is ".$this->title.' and author is'.$this->author;
    }

    public function getCopy(){


        if( $this->edition > 1)
            {
                $this->edition-- ;
                return true;
            }
            else {
                 return false;
            }

    }



}
