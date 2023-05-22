<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\InscriptionRepository;
use App\Repository\ConnexionRepository;

class UserController extends Controller
{
    public function route(): void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        // on appel la méthode connexion()
                        $this->show();
                        break;

                    case 'inscription':
                        // on appel la méthode pictureHome()
                        $this->inscription();
                        break;

                    case 'connexion':
                        // on appel la méthode pictureHome()
                        $this->connexion();
                        break;
                    /*
                    case 'deconnexion':
                        // on appel la méthode pictureHome()
                        $this->deconnexion();
                        break;
                  
                    case 'espacemembre':
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

    
    protected function show()
    {
        
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];

                $userRepository = new UserRepository();
                $user = $userRepository->findOneById($id);

                $this->render('form/vue', [
                    'user' => $user
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

    protected function inscription()
    {
        try {
            if (isset($_GET['id'])) {

                $inscriptionRepository = new InscriptionRepository();
                $inscription = $inscriptionRepository->register();

                $this->render('form/inscription', [
                    'user' => $inscription
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

    protected function connexion()
    {
        try {
            if (isset($_GET['id'])) {


                $connexionRepository = new ConnexionRepository();
                $connexion = $connexionRepository->authentification();

                $this->render('form/inscription', [
                    'user' => $connexion
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

    