<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

/*
PageController qui s'étend du Controller parent.
Son rôle sera d'analyser qu'elle action il doit effectuer dans la page
*/
class HomeController extends Controller 
{
    public function route(): void 
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'pictureHome':
                    // on appel la méthode pictureHome()
                    $this->Home();
                    break;
                
                default:
                    // génère une erreur
                    break;
            }
        } else {
            //si la personne ne spécifie pas de controller alors on charge la page d'acceuil
        }
    }

    protected function Home()
    {
        

        //on peut récuperer les données en faisant appel au modèle
        //au lieu de créer un tableau $params ont le passe directement au second paramètre de la fonction
        //premier paramètre la page que je veux afficher et second paramètre un tableau associatif
        $this->render('page/home', [
            'test' => 'abc',
            "test2" => 'abc2'
        ]);
    }
}