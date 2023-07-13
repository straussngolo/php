<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>
<body>

  <?php 
  //inclus le contenu du fichier functions.php
  require 'functions.php';
  
  
  ?>

  <h1><?= hello('Strauss');?></h1>
  <h1><?= hello('Gabriel','en');?></h1>
  
  <h1><?= hello('Saly', 'it');?></h1>

  <!--mb_pour les accents devant certaines fonctions -->
  <h1><?= mb_strtoupper(hello('Eva','es')) ;?></h1>

<p>1 + 2 = <?= addition(1,2);?></p>
<p>1 + 2 +3 + 4 + 5 = <?= addition(1,2) + addition(3,4);?></p>
<p>1 + 2 +3 + 4 + 5 + 6 = <?= addition(1, 2 , 3, 4, 5, 6, 7, 8);?></p>

<h2>Les dates</h2>

<p>Timestamp: <?=time(); ?></p>
<p> Date du jour : <?= date('d/m/y H:i');?></p>
<p>Timestamp précis : <?= strtotime('18 november 1991');?></p>
<p>Date précise : <?= date('l d/m',strtotime('+ 2 days'));?></p>


</body>
</html>