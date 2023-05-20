<?php

namespace App\Repository;

use App\Model\Home;
use App\Db\Mysql;
use App\Tools\StringTools;

class HomeRepository
{
    public function findOneById(string $src) 
    {
        //appel de la BDD
        //on récupère une instance de mysql
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM home WHERE src = :src');
        $query->bindValue(':src', $src, $pdo::PARAM_INT);
        $query->execute();
        //fetch pour récuperer qu'un seul livre
        $show = $query->fetch($pdo::FETCH_ASSOC); //renvoi un tableau associatif juste avec les valeurs nécessaires
        $showEntity = new Home();

        foreach ($show as $key => $value) {
            $showEntity->{'set'.StringTools::toPascalCase($key)}($value);
        }

        return $showEntity;
    }
}