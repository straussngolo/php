<?php 

namespace App\Legacy;


abstract class Animal

{

private string $name;
private string $type;


public function __construct(string $name)
{
    $this->name = $name;
}


public function move(){

    return $this->name.'se déplace : ' .self::class;
}

}



?>