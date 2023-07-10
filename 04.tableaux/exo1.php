<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les capitales</title>
</head>
<body>
    
<div><h1> Les plus belles villes européennes</h1></div>

<?php 
$capitales = [
    'France' => 'Paris',
    'Espagne' => 'Madrid',
    'Italie' => 'Rome',
];

;?>

<?php foreach ($capitales as $pays => $capitale)

echo "La capitale de " .$pays . " est " .$pays. "<br>"

;?>

</body>
</html>