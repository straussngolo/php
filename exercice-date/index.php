<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    function translate(string $string): string{
        $days:
        'Monday'=>'Lundi',
        'Tuesday'=>'Mardi',
        'Wednesday'=>'Mercredi',
        'Thursday'=>'Jeudi',
        'Friday'=>'Vendredi',
        'Saturday'=>'Samedi',
        'Sunday'=>'Dimanche',
    }
    
    
    ?>
    
    <p> Exo:1 <?= date('l d F y').', il est' .date('H\hi \e\t s').' secondes'?></p>



</body>
</html>