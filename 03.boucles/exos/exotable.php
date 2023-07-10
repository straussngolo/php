<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
</head>
<link rel="stylesheet" href="style.css">


<body>

<h1> Table de multiplication de 5</h1>
    

<?php 

$nombre = 5;
$i=0;


for($i=0; $i<=10; $i++){

    $resultat=$nombre*$i;

    echo ($nombre. 'X' .$i .'=' .$resultat .'</br>');

}

;?>

<div class="flex">

<?php 

for($j=1; $j<=10; $j++){

    echo "<h2>Table de multiplication de $j</h2>";
    echo '</br>';
    echo '</br>';
    echo '</br>';

    for($b=1; $b<=10; $b++){

    $multiplication = $j * $b;
    echo ($j. 'X '.$b .'=' .$multiplication .'</br>');

}

echo '</br>';

}
;?>
</div>


</body>
</html>