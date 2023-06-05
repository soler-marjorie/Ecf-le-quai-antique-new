<?php

namespace App\Repository;

use App\Model\User;
use App\Db\Mysql;
use App\Tools\StringTools;


class MembreRepository
{
   
    public function membre() 
    {
        session_start();
        if(!isset($_SESSION["user"])){
            header("location: ./index.php?controller=Home&action=show&id=1");
            exit;  
        }
    }
}