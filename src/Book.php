<?php

namespace patterns;

class Book implements BookInterface {

    public function open() {
        var_dump("Open the papper book");
    }

    public function turnPage() {
        var_dump("Turning the page of paper book");
    }

}

?>