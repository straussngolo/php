<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    
     
      <h2> Superglobales</h2>

      <?php 
      //$_GET est un tableau qui contient les paramètres de l'url

      //index.php?name=fiorella&age=3

      var_dump($_GET);

      //l'opérateur Null coolesce

      $name =$_GET['name'] ?? 'john';
      $age = $_GET['age']?? null;
      $age = (int) $age; //'40' devient 40 et toto devient 0
      var_dump($age);
      
      ?>
     
      
       <a href="index.php">Sans rien</a>   
       <a href="index.php?name=fiorella&age=3">Fiorella</a> 
       <a href="index.php?name=toto">Toto</a>  
       <a href="contact.php">Contact</a>   
       
       <h1>Bonjour <?= $name; ?></h1>

       <?php if ($age) { ?>
       <p>Tu as <?= $age; ?> ans.</p>
       <?php } ?>


    <form action="" method="get">
        <select name="age">
    
        <option value="19">18 ans</option>
        <option value="19">19 ans</option>
        <option value="19">20 ans</option>
        <option value="19">21 ans</option>

      </select>

      <button>Envoyer</button>
      
      
      
    </form>

    <form action="" method="get">
        <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name22" value="<?= $name ?>">

        </div>

        <div>
        <label for="age">age</label>

    
    <select name="age" id="age">
    <?php for ($i = 10; $i <= 120; $i++) { ?>
      <option <?= $i == $age ? 'selected' : '' ?> value="<?= $i ?>">
      <?= $i ?>
      </option>

      <?php } ?>
        </select>
        </div>
        <button>Envoyer</button>
    </form>
    <?php 
    var_dump($_POST);
    $password = $_POST['password'] ?? null;
    if($password){
        echo "<p>Votre mot de passe : $password</p>";
    }
?>



    <h2>Formulaire en Post</h2>
    <form action=" " method="post">
        <div class="section">
            <label for="password" name="password" id="password"></label>
            <input type="password" name="password" id="password">
        </div>

        <button>Envoyer</button>
    </form>



</body>
</html>