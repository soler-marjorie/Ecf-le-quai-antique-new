<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Db\Mysql;

class AdminController extends Controller
{
    public function route(): void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'pannel':
                        // on appel la méthode show()
                        $this->show();
                        break;

                    case 'edit':
                        // on appel la méthode edit()
                        $this->edit();
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
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        //home 
        $query = $pdo->prepare('SELECT * FROM home');
        $query->execute();
        $home = $query->fetchAll($pdo::FETCH_ASSOC);

        $this->render('admin/show/home', [
            'home' => $home
        ]);


        //menu 
        $query = $pdo->prepare('SELECT * FROM menu');
        $query->execute();
        $menu = $query->fetchAll($pdo::FETCH_ASSOC);

        $query = $pdo->prepare('SELECT * FROM menuTitle');
        $query->execute();
        $menuTitle = $query->fetchAll($pdo::FETCH_ASSOC);

        $this->render('admin/show/menu', [
            'menu' => $menu,
            'menuTitle' => $menuTitle
        ]);

        //horaires
        $query = $pdo->prepare('SELECT * FROM horaires');
        $query->execute();
        $horaires = $query->fetchAll($pdo::FETCH_ASSOC);

        $this->render('admin/show/schedules', [
            'horaires' => $horaires
        ]);
    }

    protected function edit()
    {   
        $this->render('admin/index', []);
    }
}