<?php 

namespace App;

class DB{


    private static \PDO $pdo;

    /**
     * 
     * permet d'établir une connexion à la BDD
     */


    private static function getInstance():\PDO{
      

        self::$pdo = new \PDO ('mysql:host=localhost:dbname=movies', 'root', '');

        return self::$pdo;

    }

    public static function select(string $sql, array $parameters =[]): array
    {

        self :: getInstance();

        return 


    }


}


?>