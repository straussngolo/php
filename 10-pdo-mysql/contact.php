<?php
require 'config/functions.php';
$id = $_GET['id'] ?? null;

$title = $contact['title'];
require 'partials/header.php';
?>

<div class="container"><br>

    <nav class='my-6' aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ol>
</nav>

    <h1>Ajout d'un film</h1>

    <!-- Contenu du formulaire -->
    <label for="email">Email</label>
    <div>     
         <input type="text" id="email" name="email">
    </div><br>

    <div> 
    <label for="email">Email</label>
            <input type="text" id="email" name="email">
    </div><br>

    <div> 
    <label for="email">Email</label>
            <input type="text" id="email" name="email">
    </div><br>




</div>

<?php require 'partials/footer.php'; ?>
