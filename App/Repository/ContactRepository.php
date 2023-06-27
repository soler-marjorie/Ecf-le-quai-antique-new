<?php

namespace App\Repository;

use App\Model\Contact;
use App\Db\Mysql;
use App\Tools\StringTools;

class ContactRepository
{
    public function showForm() 
    {
        /*
        if(isset($_POST["message"])){
            $message = "Ce message vous à été envoyé via la page contact du site exemplesite.fr
            Nom : " . $_POST["name"] . "
            Email : " . $_POST["email"] . "
            Message : " . $_POST["message"];

            $retour = mail("exempleforschool@gmail.com", $_POST["object"], $message, "From:contact@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if($retour){
            echo "l'email à bien été envoyé";
            }
        }*/
        
    }
}