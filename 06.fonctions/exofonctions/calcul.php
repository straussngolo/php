<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
require 'function.php';

?>
    
<h1>Calcul du carré d'un nombre</h1>

<p>5= <?= carre(5);?></p>


<h1> Calcul de l'aire d'un rectangle </h1>

<p> 15 * 5 = <?= rectangle(15, 5);?></p>



<h1> Calcul de l'aire d'un Cercle de rayon 8  </h1> est <?= cercle(8);?></p>



<h1>Calcul d'une fonction calculant le prix TTC </h1>

<p> 10 ht vaut est <?= price(10);?> TTC </p>


<h1>Calcul d'une fonction permettant de l'utiliser dans les 2 sens</h1>

<p> 1785.46 ht vaut est <?= price(1785.46);?> TTC </p>






</body>
</html>