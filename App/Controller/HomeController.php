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
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'pictureHome':
                        // on appel la méthode pictureHome()
                        $this->Home();
                        break;
                    
                    default:
                        // génère une erreur
                        throw new \Exception("Cette action n'existe pas : ".$_GET['action']);
                        break;
                }
            } else {
                //si la personne ne spécifie pas de controller alors on charge la page d'acceuil
                throw new \Exception("aucune action détectée");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
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