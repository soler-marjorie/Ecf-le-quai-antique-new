<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Repository\ConnexionRepository;

class UserController extends Controller
{
    public function route(): void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'connexion':
                        // on appel la méthode connexion()
                        $this->connexion();
                        break;
                    /*
                    case 'deconnexion':
                        // on appel la méthode pictureHome()
                        $this->deconnexion();
                        break;

                    case 'inscription':
                        // on appel la méthode pictureHome()
                        $this->inscription();
                        break;

                    case 'esspacemembre':
                        // on appel la méthode pictureHome()
                        $this->membre();
                        break;
                    */
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

    
    protected function connexion()
    {
        
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];

                $connexionRepository = new ConnexionRepository();
                $connexion = $connexionRepository->findOneById($id);

                $this->render('user/connexion', [
                    'connexion' => $connexion
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
    
/*
    protected function connexion()
    {
        
        try {
            if (isset($_POST['email']) && isset($_POST['password'])) {

                $connexionRepository = new ConnexionRepository();
                $connexion = $connexionRepository->welcomeUser();

                $this->render('user/connexion', [
                    'connexion' => $connexion
                ]);
            } else {
                throw new \Exception("identifiant est manquant");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
*/

    

}