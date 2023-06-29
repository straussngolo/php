<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
<ul>


<?php 
for($i=0; $i<=10; $i++){?>

    <li> <?= $i; ?>

    </li>

<?php }?>

</ul>

<?php  $firstnames=['Fiorella', 'Marina', 'Mathieu'];?>

<div style="display: flex; gap: 10px;>

<?php  foreach($firstnames as $firstnames){?>

    <h3>

    <?= $firstnames;} ?>

</h3>

}


</div>
    
</body>
</html>