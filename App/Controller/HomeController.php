<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Db\Mysql;

class HomeController extends Controller 
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

                    case 'edit':
                        // on appel la méthode show()
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
        $query = $pdo->prepare('SELECT * FROM home');
        $query->execute();
        $home = $query->fetchAll($pdo::FETCH_ASSOC);
        
        //var_dump($home);

        $this->render('home/index', [
            'home' => $home
        ]);
    }

    protected function edit()
    {    

        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();
        $query = $pdo->prepare('UPDATE * FROM home');
        $query->execute();
        $home = $query->fetchAll($pdo::FETCH_ASSOC);
        
    }
}