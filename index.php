<?php

require 'vendor/autoload.php';

use patterns\Book;
use patterns\Nook;
use patterns\Kindle;
use patterns\Person;
use patterns\eReaderAdapter;

$person = new Person;

$person->read(new Book);

$person->read(new eReaderAdapter(new Kindle));

$person->read(new eReaderAdapter(new Nook));

?>