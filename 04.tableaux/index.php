<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    
  <h2>Tableau numérique</h2>

  <?php
 $drinks =['Monster', 'Coca-cola','Orangina'];

 //afficher orangina

 echo $drinks[2];


 //comment onpeut ajouter une boisson dans le tableau

 $drinks[]= 'Ice Tea';


 array_push($drinks, 'Eau'); //Ancienne syntaxe


 //Comment remplacer une valeur?

 $drinks[1]='vittel';


 //Comment retirer une valeur
 unset($drinks[2]);

 var_dump($drinks);


;?>

<ul>
  <?php foreach($drinks as $index => $drink){?>

    <li><?= $drink; ?>
    </li>
  <?php }
  ;?>

</ul>

<ul>


<?php foreach($drinks as $index => $drink){

  //seconde façon d'afficher le code au-dessus

echo'<li><?= $drink; ?></li>';
 }

;?>
</ul>


<h2> Les tableaux associatifs</h2>

<?php  

$fruits=[

'rouge' =>'Fraise',
'jaune'=>'Banane',
'Cerise',
'D'=>'Orange',
'Pomme',

];

var_dump($fruits);

;?>

<h2>

Les tableaux multidimensionnels
</h2>
<?php

$users = [
  [
      'name' => 'Mota',
      'firstname' => 'Fiorella',
      'phone' => '0658458425',
      'addresses' => ['Hullich', 'Lens', 'Lille'],
  ],
  [
      'name' => 'Doe',
      'firstname' => 'John',
      'addresses' => ['Château Thierry'],
  ]
];
?>

        <p><?= $users[0]['firstname'] . ' ' . $users[0]['name']; ?> vit à <?= $users[0]['addresses'][0] ?></p>

 <?php foreach ($users as $user)  {?>

  <div>
    <h2><?= $user['firstname']. ''.$user['name'];?></h2>

    <ul>
      
    <?php foreach ($user['addresses'] as $adress)  { ?>

      <li>
        <?= $adress; ?>
      </li> 

      <?php }  ?>


    </ul>
  
  
  </div>

<?php }  ?>

</body>


</html>