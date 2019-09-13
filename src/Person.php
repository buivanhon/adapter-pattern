<?php

namespace patterns;

use patterns\BookInterface;

class Person {

    public function read(BookInterface $book) {
        $book->open();
        $book->turnPage();
    }
}

?>