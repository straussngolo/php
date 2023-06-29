<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'âge</title>
    <script src="script.js"></script>
</head>
<body>

    <h1>Calcul de l'âge de la majorité</h1>

    <?php $age= rand(0 ,20);

     
        if ($age >18)
        {
        echo "Vous pouvez entrer";
        }
        elseif($age <= 10)
        {
        echo "interdit";
        }

        else if($age >=16 && $age<18){
            echo "Vous êtes presque majeur";
        } 
        elseif($age >14 && $age<=16){
            echo " Vous êtes jeune";
        } elseif($age = 14){
            echo "Vous êtes trop jeune";
        }
    
    ?>







      <script src="script.js"></script>
</body>
</html>