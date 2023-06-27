<?php

namespace App\Repository;

use App\Model\Booking;
use App\Db\Mysql;
use App\Tools\StringTools;

class ValidateRepository
{
    public function validate(int $id) 
    {
        //appel de la BDD
        //on récupère une instance de mysql
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM user WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        //fetch pour récuperer qu'un seul livre
        
    }
}