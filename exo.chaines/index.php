<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$words="Bon chic Bon Genre";

function initiales($string)
{
    $words = explode(" ", $string);
    $initiale = '';
 
	foreach($words as $init){
		$initiale .= $init[0];
    }
    return strtoupper($initiale);
}

echo initiales($words).'<br>';


;?>

<?php 

$verbe = 'aimer';


function conjugate(string $verbe): string{

    $subjects=[
        'Je' =>'e',
        'Tu' =>'es',
        'Il/elle' =>'e',
        'Nous' =>'ons',
        'Vous' => 'ez',
        'Ils' =>'ent',
    ];

    
    
    $result=[];

    foreach ($subjects as $subject => $ending) {
        $result []="$subject $radical$ending";//Nous cherchons
        # code...
    }

    return implode('<br>', $result);
}

$verbe = $_POST['verbe'] ??


;?>



</body>
</html>