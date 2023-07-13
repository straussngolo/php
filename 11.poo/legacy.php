<?php

require 'vendor/autoload.php';

use App\Legacy\Cat;
use App\Legacy\Dog;
use App\Library\Book;

$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register(); 


$catA = new Cat("o'malley");
$dogA = new Dog("'Pongo'");


dump($catA, $dogA);

dump($catA instanceof Animal);

echo $catA->move() .<br>;
echo $dogA->move() .<br>;