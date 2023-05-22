<?php

namespace App\Repository;

use App\Model\Contact;
use App\Db\Mysql;
use App\Tools\StringTools;

class ContactRepository
{
    public function findOneById(int $id) 
    {
        
        //appel de la BDD
        //on récupère une instance de mysql 
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM contact WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        //fetch pour récuperer qu'un seul livre
        $contact = $query->fetch($pdo::FETCH_ASSOC); //renvoi un tableau associatif juste avec les valeurs nécessaires
        $contactEntity = new Contact();

        foreach ($contact as $key => $value) {
            $contactEntity->{'set'.StringTools::toPascalCase($key)}($value);
        }

        return $contactEntity;
    }
}