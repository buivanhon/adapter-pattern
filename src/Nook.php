<?php

namespace patterns;

class Nook implements eReaderInterface {

    public function turnOn() {
        var_dump("Turn on the Nook");
    }

    public function pressNextButton() {
        var_dump("Press the next button on the Nook");
    }

}

?>