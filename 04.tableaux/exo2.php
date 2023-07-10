<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];
;?>
<?php 
$Grandpays=[];
foreach ($population as $pays => $nombresdhabitants) {
    if($nombresdhabitants>20000000){

        echo $pays. '</br>';
    }
}

?>

<?php 

$sum=0



;?>

</body>
</html>