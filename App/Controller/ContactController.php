<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Repository\ContactRepository;

class ContactController extends Controller 
{
    public function route(): void 
    {
        
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        // on appel la méthode show()
                        $this->show();
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
                //charger le livre par un appel au repository

                $showRepository = new ContactRepository();
                //on appel notre méthode qui va nous retourner un livre
                $show = $showRepository->showForm();

                $this->render('contact/vue', [
                    'contact' => $show
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