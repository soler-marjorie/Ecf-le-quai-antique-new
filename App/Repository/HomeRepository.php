<?php
namespace App\Repository;

use App\Model\Home;
use App\Db\Mysql;
use App\Tools\StringTools;

class HomeRepository
{
     public function findOneById(int $id) 
        {
            
            //appel de la BDD
            //on récupère une instance de mysql 
            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();
            $query = $pdo->prepare('SELECT * FROM home ');
            //$query->bindValue(':id', $id, $pdo::PARAM_INT);
            $query->execute();
            //fetch pour récuperer qu'un seul livre
            $home = $query->fetch($pdo::FETCH_ASSOC); //renvoi un tableau associatif juste avec les valeurs nécessaires

            
            $homeEntity = new Home();

            

            foreach($home as $key => $value){
                $homeEntity->{'set'.stringTools::toPascalCase($key)}($value);
            }

            return $homeEntity;
        

        }
}

?>