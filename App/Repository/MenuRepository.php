<?php

namespace App\Repository;

use App\Model\Menu;
use App\Db\Mysql;
use App\Tools\StringTools;

class MenuRepository
{
    public function findOneById(int $id) 
    {
        //appel de la BDD
        //on récupère une instance de mysql
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM menu WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        //fetch pour récuperer qu'un seul livre
        $menu = $query->fetch($pdo::FETCH_ASSOC); //renvoi un tableau associatif juste avec les valeurs nécessaires
        $menuEntity = new Menu();

        foreach ($menu as $key => $value) {
            $menuEntity->{'set'.StringTools::toPascalCase($key)}($value);
        }

        return $menuEntity;
    }
}