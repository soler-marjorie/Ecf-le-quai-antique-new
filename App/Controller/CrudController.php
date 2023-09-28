<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Repository\ReadRepository;
use App\Repository\AddRepository;

class CrudController extends Controller 
{
    public function route(): void 
    {
        
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {                    
                    case 'read':
                        // on appel la méthode show()
                        $this->read();
                        break;

                    case 'add':
                        // on appel la méthode show()
                        $this->add();
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

    protected function read()
    {
        
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];

                $readRepository = new ReadRepository();
                $read = $readRepository->read($id);

                $this->render('AdminCRUD/admin', [
                    'admin' => $read
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

    protected function add()
    {
        
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];

                $addRepository = new AddRepository();
                $add = $addRepository->add();

                $this->render('AdminCRUD/add/addGalerie', [
                    'admin' => $add
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