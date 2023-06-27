<?php


namespace App\Repository;

use App\Db\Mysql;


class BookingRepository
{
   
    public function bookingForm()
    {
        //On traite le formulaire
        if(!empty($_POST)){
            // post n'est pas vide, on vérifie que toutes les données soient présentes
            if(
                isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["nbrPeople"], $_POST["ingredients"], $_POST["date"], $_POST["time"]) 
                && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"]) && !empty($_POST["nbrPeople"]) && !empty($_POST["ingredients"]) && !empty($_POST["date"]) && !empty($_POST["time"])
            ){
                //Le formulaire est complet
                //On récupère les données en les protégeant (failles xss)
                //On retire toute les balises des données
                $name = strip_tags($_POST["name"]);
                $surname = strip_tags($_POST["surname"]);
                $email = strip_tags($_POST["email"]);
                $nbrPeople = strip_tags($_POST["nbrPeople"]);
                $ingredients = strip_tags($_POST["ingredients"]);
                $date = strip_tags($_POST["date"]);
                $time = strip_tags($_POST["time"]);

                //On peut les enregistrer
                //on se connecte à la bdd
                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();

                $query = $pdo->prepare("INSERT INTO booking(name, surname, email, nbrPeople, allergies, date, schedules) VALUES(:name, :surname, :email, :nbrPeople, :allergies, :date, :schedules)");

                //on injecte les valeurs
                $query->bindValue(':name', $name, $pdo::PARAM_STR);
                $query->bindValue(':surname', $surname, $pdo::PARAM_STR);
                $query->bindValue(':email', $email, $pdo::PARAM_STR);
                $query->bindValue(':nbrPeople', $nbrPeople, $pdo::PARAM_INT);
                $query->bindValue(':allergies', $ingredients, $pdo::PARAM_STR);
                $query->bindValue(':date', $date, $pdo::PARAM_STR);
                $query->bindValue(':schedules', $time, $pdo::PARAM_STR);
                
                //On exécute la requête
                if(!$query->execute()){
                    die("Une erreur est survenue");
                }

                
                header("location: ./index.php?controller=book&action=check&id=1");

            }else{
                die("Le formulaire est incomplet");
            }
        }
    } 
}