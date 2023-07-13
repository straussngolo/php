<?php
$title = 'Contact';
require 'partials/header.php';

// Récupération des données du formulaire
$email = $_POST['email'] ?? null;
$skills = $_POST['skills'] ?? [];
$errors = []; // Stocker les erreurs du formulaire

$validskills = [
    'html' => 'HTML/CSS',
    'js' => 'Javascript',
    'php' => 'PHP',
    'java' => 'Java',
];

// Vérifier si le formulaire est envoyé
if (!empty($_POST)) {
    if (empty($email)) {
        $errors[] = "L'email est obligatoire.";
    } else if (!validEmail($email)) {
        $errors[] = "L'email est invalide.";
    }

    if (count($skills) < 1) {
        $errors[] = 'Vous devez choisir au moins une compétence.';
    } else if (!validArray($skills, array_keys($validskills))) {
        $errors[] = "Une compétence choisie n'est pas correcte.";
    }

    if(empty($errors)){

        $success="Bonjour $email, voici vos skills : ".implode(',',$skills);

    }

    var_dump($errors);
}

?>
<?php if (isset($sucess)){?>
<div class="container py-5">
    <h1>Contact</h1>

    <div class="alert alert success">

    <?= $success;?>
</div>

<?php if (!empty($errors)){?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors as $error){?>
                <li><?= $error; ?></li>
            <?php }?>
        </ul>
    </div>
<?php }?>



    <div class="alert alert-danger">

        <<?php }?>

            <?php foreach($serrors as $error){?>

            <li><?= $error; ?></li>

        <?php }?>

    </div>
        

    <form method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= $email;?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Compétences</label>
            <div class="form-check">
                <input type="checkbox" id="html" name="skills[]" value="html" <?= checked('html',$skills);?> class="form-check-input">
                <label for="html" class="form-check-label">HTML / CSS</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="js" name="skills[]" value="js" class="form-check-input">
                <label for="js" class="form-check-label">JavaScript</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="java" name="skills[]" value="java" class="form-check-input">
                <label for="java" class="form-check-label">Java</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="php" name="skills[]" value="php" class="form-check-input">
                <label for="php" class="form-check-label">PHP</label>
            </div>
        </div>

        <button class="btn btn-dark">Valider</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>
