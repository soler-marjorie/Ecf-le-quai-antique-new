<?php

namespace App\Controller;

/* 
Création d'un routeur :
son role sera d'analyser l'url de la page et de renvoyer la requete vers un routeur ou un autre.

Les requêtes arrivent d'abord à lui/ c'est lui qui recoit en premier toutes les resquêtes.
*/
class Controller
{
    /* 
    Création d'une méthode appelée route qui ne retourne rien(void).
    Son rôle sera d'analyser ce qu'il y a dans l'url
    */
    /*
    Son rôle est de faire un premier routage global
    Il va analyser quel controller on veut appeler à partir du paramètre d'url
    */
    public function route(): void 
    {
        try {
            //Get : permet de récuperer quel controller dans l'url
            if (isset($_GET['controller'])) {
                //isset permet de tester le controller
                switch ($_GET['controller']) {
                    case 'home':
                        // on va charger le controller home
                        $homeController = new HomeController();
                        $homeController->route();
                        break;

                    case 'menu':
                        // on va charger le controller Menu
                        $menuController = new MenuController();
                        $menuController->route();
                        break;

                    case 'user':
                        // on va charger le controller user
                        $userController = new UserController();
                        $userController->route();
                        break;
                    
                    default:
                        // génère une erreur
                        throw new \Exception("Le controller n'existe pas");
                        break;
                }
            } else {
                //si la personne ne spécifie pas de controller alors on charge la page d'acceuil
                $homeController = new HomeController();
                $homeController->home();
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }

    }

    /*
    render s'utilise sur tous les controleurs, elle est donc utilisée dans le controller parent.
    le role de cette méthode est de passer des paramètres et de gérer un affichage d'une page, de tester si le templates 
    existe (un peu gestion d'erreur).
    */
    // en premier paramètre : path --> ce qu'on veut rendre, ce qu'on veut afficher.
    // en deuxième paramètre : params --> ce sont des paramètres que l'on veut passer à la vue (des variables, ...).
    protected  function render(string $path, array $params = []):void
    {
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';

        try {
            if (!file_exists($filePath)) {
                //générer une erreur
                throw new \Exception("Fichier non trouvé : ".$filePath);
            } else {
                //extrait chaque ligne du tableau et créer des variable pour chacune
                extract($params);
                require_once $filePath;
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }

    }

}