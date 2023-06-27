<?php

namespace App\Repository;


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