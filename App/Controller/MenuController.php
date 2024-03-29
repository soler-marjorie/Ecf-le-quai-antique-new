<?php

namespace App\Controller;

//on appel le repository que l'on est en train de gérer
use App\Db\Mysql;

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
                    /*
                    case 'edit':
                        // pour modifier un menu
                        //$this->edit();
                        break;
                    
                    case 'add':
                        // pour ajouter un menu
                        //$this->add();
                        break;

                    case 'delete':
                        // pour supprimer un menu
                        //$this->delete();
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
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();
        $query = $pdo->prepare('SELECT * FROM menu');
        $query->execute();
        $menu = $query->fetchAll($pdo::FETCH_ASSOC);

        $query = $pdo->prepare('SELECT * FROM menuTitle');
        $query->execute();
        $menuTitle = $query->fetchAll($pdo::FETCH_ASSOC);
        
        //var_dump($menu);
        //var_dump($menuTitle);

        $this->render('menu/index', [
            'menu' => $menu,
            'menuTitle' => $menuTitle
        ]);        
    }

}