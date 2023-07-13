<?php 

/**
 * Script qui permet d'importer des films depuis un fichier CSV
 */

// Ouvrir le fichier des catégories en lecture
$file = fopen('exports/categories.csv', 'r');

$categories = [];
$count = 0;

// Parcourir le fichier ligne par ligne
while ($line = fgetcsv($file, null, ';')) {
    if ($count++ === 0) {
        continue; // Passer la première ligne du CSV
    }

    $categories[] = [
        'name' => $line[1],
    ];
}

fclose($file);

var_dump($categories);

// Connexion à la base de données pour importer les catégories
require 'config/functions.php';

// Nettoyer la table des catégories avant l'import
db()->query('
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE category;
TRUNCATE TABLE actor;
TRUNCATE TABLE joue_dans;
TRUNCATE TABLE movie;
SET FOREIGN_KEY_CHECKS = 1;');

// Importer les catégories
foreach ($categories as $category) {
    $query = db()->prepare('INSERT INTO category (name) VALUES (:name)');
    $query->execute($category);
}

// Ouvrir le fichier des films
$file = fopen('exports/movies.csv', 'r');

$movies = [];
$count = 0;

// Parcourir le fichier ligne par ligne
while ($line = fgetcsv($file, null, ';')) {
    if ($count++ === 0) {
        continue; // Passer la première ligne du CSV
    }

    $movies[] = [
        'title' => $line[1],
        'released_at' => $line[2],
        'description' => $line[3],
        'duration' => $line[4],
        'cover' => $line[5],
        'id_category' => $line[6],
    ];
}

fclose($file);

var_dump($movies);

// Nettoyer la table des films avant l'import
db()->query('
SET FOREIGN_KEY_CHECKS = 0;
SET FOREIGN_KEY_CHECKS = 1');

// Importer les films
foreach ($movies as $movie) {
    $query = db()->prepare('INSERT INTO movie (title, released_at, description, duration, cover, id_category) VALUES (:title, :released_at, :description, :duration, :cover, :id_category)');
    $query->execute($movie);
}


// Ouvrir le fichier des acteurs
$file = fopen('exports/actors.csv', 'r');

$actors = [];
$count = 0;

// Parcourir le fichier ligne par ligne
while ($line = fgetcsv($file, null, ';')) {
    if ($count++ === 0) {
        continue; // Passer la première ligne du CSV
    }

    $actors[] = [
        'name' => $line[1],
        'firstname' => $line[2],
        'birthday' => $line[3],

    ];
}

fclose($file);

var_dump($actors);

// Nettoyer la table des films avant l'import
db()->query('
SET FOREIGN_KEY_CHECKS = 0;
SET FOREIGN_KEY_CHECKS = 1');

// Importer les acteurs
foreach ($actors as $actor) {
    $query = db()->prepare('INSERT INTO actor (name, firstname, birthday) VALUES (:name, :firstname, :birthday)');
    $query->execute($actor);

}


$movieActors = convertCsvToArray('exports/movie_has_actor.csv');

foreach ($movieActors as $movieActor) {
    $query = db()->prepare('INSERT INTO joue_dans (id, id_movie) VALUES ( :id_actor, :id_movie)');
    $query->execute($movieActor);
}

echo 'Données importées avec succès.';