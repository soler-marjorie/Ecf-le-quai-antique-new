<?php

namespace App\Repository;

use App\Model\User;
use App\Db\Mysql;
use mysqli;

//use App\Tools\StringTools;

class ConnexionRepository
{
    
    public function findOneById(int $id) 
    {
        //appel de la BDD
        //on récupère une instance de mysql
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM connexion WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        //fetch pour récuperer qu'un seul livre
        $connexion = $query->fetch($pdo::FETCH_ASSOC); //renvoi un tableau associatif juste avec les valeurs nécessaires
        $connexionEntity = new User();

        foreach ($connexion as $key => $value) {
            $connexionEntity->{'set'.StringTools::toPascalCase($key)}($value);
        }

        return $connexionEntity;


    }
    
/*
    public function welcomeUser()
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);

        //appel de la BDD
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
        $query->bindValue(':email', $email, $pdo::PARAM_INT);
        $query->bindValue(':password', $password, $pdo::PARAM_INT);
        $query->execute();

        $numberLine = \mysqli_num_rows($query);

        if ($numberLine > 0) {
            header("location : home.php");
            //on entre dans l'espace membre
        } else {
            echo "email ou mot de passe invalide";
        }
    }
*/

    
}