<?php

namespace patterns;

class Kindle implements eReaderInterface {

    public function turnOn() {
        var_dump("Turn on the Kindle");
    }

    public function pressNextButton() {
        var_dump("Press the next button on the Kindle");
    }

}

?>