<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

/** fonctions sur les chaînes */

/* on peut extraire des chaînes */

$email = 'strauss.ngolo@boxydev.com';

$domain = strstr($email, '@');
$domain = substr($domain, 1);

$username = strstr($email, '@', true);

echo "Le domaine est $domain. <br>";

// Vérifier qu'une chaîne contient un certain texte

if (str_contains($email, 'boxydev')) {
    echo "L'e-mail $email contient boxydev";
}

// On peut remplacer des termes par une chaîne

echo 'E-mail anonyme: ';
echo str_replace('strauss', '********', $email) . '<br>';

// En PHP, une chaîne est un tableau

foreach (str_split($username) as $letter) {
    echo "$letter - ";
}

echo '<br>';

echo $username[2] . '<br>';

echo substr($email, 0, 8) . '<br>';
echo substr($email, 9, -4) . '<br>';
echo substr($email, -3) . '<br>';


$countries ='Italie, France, Portugal';
$countries= explode(',', $countries);
var_dump($countries);

echo implode(';',$countries).'<br>';

//quelques fonctions pour les formulaires

$password ='azerty125  ';
$password = trim($password); //'azerty123 ' => 'azerty123'
var_dump($password);

echo 'Le mot de passe $password fait *.strlen($password)'.'caractères'. '<br>';

//exemple de faille xss

$message = $_GET['message'] ?? null;

//on désactive l'interprétation du HTML

$message = htmlspecialchars($message ?? '');

//strip-tags($message; // supprime les balises)

echo $message;


?>
</body>
</html>