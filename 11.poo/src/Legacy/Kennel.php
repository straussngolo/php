<?php 

namespace App\Legacy;

class kennel{
    /**
     * 
     * @var array<Animal>
     */

private array $animals =[];

public function keep(Animal $animal): self
{

    $this->animals[]= $animal;

    return $this;
}
}


?>