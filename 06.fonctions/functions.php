<?php 
function hello(string $name, string $lang ='fr'): string{

    $subjects =[
        'en'=>'Hello',
        'fr'=>'Bonjour',
        'it'=>'Buongiorno',
        'es'=>'Hola',
    ];

    /**
     * *ability to say hello to people.
     * */

     $langs=strtoupper($lang);

     $subject=$subjects[$lang] ?? $subjects['fr'];

    return "$subject $name";
}

/**ability to sum many numbers */

function addition(int $n1, int $n2, ...$ns):int{

    return $n1 +$n2 + array_sum($ns);
}

?>



