<?php

namespace App\Repository;

use App\Model\User;
use App\Db\Mysql;
use App\Tools\StringTools;

//use App\Tools\StringTools;

class UserRepository
{
    
    public function findOneById(int $id) 
    {
        //appel de la BDD
        //on récupère une instance de mysql
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM user WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        //fetch pour récuperer qu'un seul livre
        $user = $query->fetch($pdo::FETCH_ASSOC); //renvoi un tableau associatif juste avec les valeurs nécessaires
        $userEntity = new User();

        foreach ($user as $key => $value) {
            $userEntity->{'set'.StringTools::toPascalCase($key)}($value);
        }

        return $userEntity;

    }
        
}