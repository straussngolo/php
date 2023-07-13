<?php 
function carre(int $longueur1):int{

    return $longueur1 * $longueur1;
}

?>


<?php 

function rectangle(int $longueur2, int $largeur2):int{

    return $longueur2 * $largeur2;
}

?>

<?php 

function cercle(int $radius):float | int{

    return round($radius* $radius * pi(), 2);
}

?>

<?php 

function price(int| float $price, int $rate = 20): int | float{

    return $price * (1 +$rate/100);
}

?>

<?php 
function price1(int| float $price1, int $rate = 20 , bool $withTaxes = true): string{

    $result = $price1 *(1 + $rate/100);

    if(!$withTaxes){

        return $price1 * (1 +$rate/100); 
    }

    return $price1 * (1 +$rate/100);
}

?>

