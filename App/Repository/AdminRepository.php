<?php


namespace App\Repository;

use App\Db\Mysql;


class AdminRepository
{
   
    public function view()
    {
        var_dump($_POST);
        //on démarre la session php
        session_start();
        
        //On vérifie si le formulaire à été envoyé
        if(!empty($_POST)){
            //Le formulaire à été envoyé 
            //On vérifie tous les champs
            if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email'] && !empty($_POST['password']))){
            
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    die("l'adresse mail est incorrecte");
                }

                //on se connecte à la bdd
                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();

                $query = $pdo->prepare("SELECT * FROM admin WHERE email = :email, password = :password");
                $query->bindValue(":email", $_POST['email'], $pdo::PARAM_STR);
                $query->bindValue(":password", $pdo::PARAM_STR);
                $query->execute();

                $admin = $query->fetch();

                if(!$admin){
                    die("l'utilisateur n'existe pas");
                }

                //On a un admin existant, on peut vérifier le mot de passe
                if(!password_verify($_POST['password'], $admin['password'])){
                    die("l'utilisateur et/ou le mot de passe incorrect");
                }
                
                //on stock dans $_SESSION les informations de l'utilisateur
                $_SESSION['admin'] = [
                    "id" => $admin["id"],
                    "pseudo" => $admin["pseudo"],
                    "email" => $admin["email"],

                ];
                
                //on peut rediriger vers la page de profil par exemple
                header("location: ./index.php?controller=admin&action=pannel&id=1");
            } 
        }

    }
}