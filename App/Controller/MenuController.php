<?php

namespace App\Controller;

//on appel le repository que l'on est en train de gérer
use App\Repository\MenuRepository;

class MenuController extends Controller 
{
    public function route(): void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        // pour afficher un menu
                        $this->show();
                        break;
                    
                    case 'list':
                        // pour afficher tous les menus
                        //$this->list();
                        break;

                    case 'edit':
                        // pour ajouter un menu
                        //$this->edit();
                        break;
                    
                    case 'add':
                        // pour ajouter tous les menus
                        //$this->add();
                        break;

                    case 'delete':
                        // pour supprimer un menu
                        //$this->delete();
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

                $menuRepository = new MenuRepository();
                //on appel notre méthode qui va nous retourner un livre
                $menu = $menuRepository->findOneById($id);

                $this->render('menu/show', [
                    'menu' => $menu
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