<?php


namespace App\Repository;


use App\Db\Mysql;


class ConnexionRepository
{
   
    public function authentification() 
    {    //on démarre la session php
        session_start();


        if(isset($_POST['connexion'])){

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

                    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
                    $query->bindValue(":email", $_POST['email'], $pdo::PARAM_STR);
                    $query->execute();

                    $user = $query->fetch();

                    if($user['role'] == 'user'){
                        if(!$user){
                            die("l'utilisateur n'existe pas");
                        }
        
                        //On a un user existant, on peut vérifier le mot de passe
                        if(!password_verify($_POST['password'], $user['password'])){
                            die("l'utilisateur et/ou le mot de passe incorrect");
                        }
                        
                        //on stock dans $_SESSION les informations de l'utilisateur
                        $_SESSION['user'] = [
                            "id" => $user["id"],
                            "name" => $user["name"],
                            "surname" => $user["surname"],
                            "email" => $user["email"]
                        ];
                        
                        //on peut rediriger vers la page de profil par exemple
                        header("location: ./index.php?controller=user&action=membre&id=1");

                    } elseif($user['role'] == 'admin'){
                        if(!$user){
                            die("l'utilisateur n'existe pas");
                        }
        
                        //On a un user existant, on peut vérifier le mot de passe
                        if(!password_verify($_POST['password'], $user['password'])){
                            die("l'utilisateur et/ou le mot de passe incorrect");
                        }
                        
                        //on stock dans $_SESSION les informations de l'utilisateur
                        $_SESSION['user'] = [
                            "id" => $user["id"],
                            "name" => $user["name"],
                            "surname" => $user["surname"],
                            "email" => $user["email"]
                        ];
                        
                        //on peut rediriger vers la page de profil par exemple
                        header("location: ./index.php?controller=crud&action=pannel&id=1");
                    }

                }
            }
        }
    }
}