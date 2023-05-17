<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Repository\HomeRepository;

class HomeController extends Controller 
{
    public function route(): void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'home':
                        // on appel la méthode pictureHome()
                        $this->home();
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

    protected function home()
    {
        
        try {
            if (isset($_POST['id'])) {

                $id = (int)$_POST['id'];

                $homeRepository = new HomeRepository();
                $home = $homeRepository->findOneById($id);

                $this->render('home/picture', [
                    'home' => $home
                ]);
            } else {
                throw new \Exception("l'id est manquant en paramètre");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
}