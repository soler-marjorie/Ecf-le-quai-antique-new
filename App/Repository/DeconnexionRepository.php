<?php


namespace App\Repository;


class DeconnexionRepository
{
    function deconnexion(){
        session_start();
        if(!isset($_SESSION["user"])){
            header("location: ./index.php?controller=home&action=show&id=1");
            exit;
        }
        //unset() permet de supprimer une variable
        unset($_SESSION["user"]);

        header("location: ./index.php?controller=home&action=show&id=1");
    }
}