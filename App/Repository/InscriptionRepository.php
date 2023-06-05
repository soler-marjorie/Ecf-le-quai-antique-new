<?php

namespace App\Repository;


use App\Db\Mysql;


class InscriptionRepository
{
   
    public function register() 
    {
        //on démarre la session php
        session_start();
        if(isset($_SESSION["user"])){
            header("location: ./index.php?controller=user&action=membre&id=1");
            exit;
        }
        //On vérifie si le formulaire à été envoyé
        if(!empty($_POST)){
            //Le formulaire à été envoyé 
            //On vérifie tous les champs
            if(isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']) 
                && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['password'])){
                    //le formulaire est complet
                    //on récupère les données en les protégeants
                    $name = strip_tags($_POST['name']);
                    $surname = strip_tags($_POST['surname']);

                    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                        die("l'adresse mail est incorrecte");
                    }

                    // on va hasher le mot de passe
                    $password = password_hash($_POST['password'], PASSWORD_ARGON2ID);

// -----------------Ajouter ici tous les controles souhaiter exemple deux mots de passe identiques

                    //on enregistre en base de données
                    $mysql = Mysql::getInstance();
                    $pdo = $mysql->getPDO();

                    $query = $pdo->prepare("INSERT INTO user(name, surname, email, password) VALUES(:name, :surname, :email, '$password')");
                    $query->bindValue(':name', $name, $pdo::PARAM_STR);
                    $query->bindValue(':surname', $surname, $pdo::PARAM_STR);
                    $query->bindValue(':email', $_POST['email'], $pdo::PARAM_STR);
                    $query->execute();

// -----------------On connectera l'utilisateur

            } else {
                die("le formulaire est incomplet");
            }
        }
        
    }
}