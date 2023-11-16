<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Db\Mysql;

class UserController extends Controller
{
    public function route(): void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'membre':
                        // on appel la méthode membre()
                        $this->membre();
                        $this->render('user/index', []);
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

    protected function membre()
    {
        session_start();
        if(!isset($_SESSION["user"])){
            header("location: ./index.php?controller=Home&action=show");
            exit;  
        }
    }
}  

    