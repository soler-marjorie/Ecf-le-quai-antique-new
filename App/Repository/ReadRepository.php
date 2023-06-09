<?php

namespace App\Repository;

use App\Db\Mysql;

class ReadRepository
{
    public function read(int $id) 
    {
        // On démarre une session
        session_start();

        // Est-ce que l'id existe et n'est pas vide dans l'URL
        if(isset($_GET['id']) && !empty($_GET['id'])){

            // On nettoie l'id envoyé
            $id = strip_tags($_GET['id']);


            // On prépare la requête
            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();

            $query = $pdo->prepare('SELECT * FROM home WHERE id = :id');

            // On "accroche" les paramètre (id)
            $query->bindValue(':id', $id, \PDO::PARAM_INT);

            // On exécute la requête
            $query->execute();

            // On récupère le produit
            $produit = $query->fetch();

            // On vérifie si le produit existe
            if(!$produit){
                $_SESSION['erreur'] = "Cet id n'existe pas";
                header('Location: ');
            }
        }else{
            $_SESSION['erreur'] = "URL invalide";
            header('Location: ');
        } 

    }
}