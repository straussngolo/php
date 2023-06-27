<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo 'Hello PHP';
//on peut afficher du texte en PHP

//les variables
$age=2023 -1994;

$price = 2.99;

?>

<h1><?php echo 'Hello PHP, tu as '. $age. ' ans';?></h1>
<p><?= "La variable price contient $price € ";?></p>
<p><?= "La variable \$price contient $price € ";?></p>


    
</body>
</html>