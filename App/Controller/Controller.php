<?php

namespace App\Controller;

/* 
Création d'un routeur :
son role sera d'analyser l'url de la page et de renvoyer la requete vers un routeur ou un autre.

Les requêtes arrivent d'abord à lui/ c'est lui qui recoit en premier toutes les resquêtes.
*/
class Controller
{
    /* 
    Création d'une méthode appelée route qui ne retourne rien.
    Son rôle sera d'analyser ce qu'il y a dans l'url
    */
    public function route(): void 
    {
        //Get : permet de récuperer quel controller dans l'url
        if (isset($_GET['controller'])) {
            //isset permet de tester le controller
            switch ($_GET['controller']) {
                case 'page':
                    // on va charger la controller page
                    var_dump('on charge pageController');
                    break;

                case 'pictureHome':
                    // on va charger la controller PictureHome
                    var_dump('on charge PictureHomeController');
                    break;

                case 'menu':
                    // on va charger la controller Menu
                    var_dump('on charge MenuController');
                    break;
                
                default:
                    // génère une erreur
                    break;
            }
        } else {
            //si la personne ne spécifie pas de controller alors on charge la page d'acceuil
        }

    }

}