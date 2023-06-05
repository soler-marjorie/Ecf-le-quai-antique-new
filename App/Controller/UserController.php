<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\InscriptionRepository;
use App\Repository\ConnexionRepository;
use App\Repository\DeconnexionRepository;
use App\Repository\MembreRepository;

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
                        // on appel la méthode inscription()
                        $this->inscription();
                        break;

                    case 'connexion':
                        // on appel la méthode connexion()
                        $this->connexion();
                        break;
                    
                    case 'deconnexion':
                        // on appel la méthode deconnexion()
                        $this->deconnexion();
                        break;
                  
                    case 'membre':
                        // on appel la méthode membre()
                        $this->membre();
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

                $this->render('form/vue', [
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

    protected function deconnexion()
    {
        try {
            if (isset($_GET['id'])) {

                $decoRepository = new DeconnexionRepository();
                $deconnexion = $decoRepository->deconnexion();

                $this->render('form/vue', [
                    'user' => $deconnexion
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

    protected function membre()
    {
        try {
            
                $this->render('user/profilUser', []);
           
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
}  

    