<?php
/*
controlleur pour page statique comme home ou about 
*/

namespace App\Controller;

use App\Db\Mysql;

class ConnexionController extends Controller
{
    public function route(): void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'connexion':
                        // on appel la méthode connexion()
                        $this->connexion();

                        $this->render('form/connexion', []);
                        break;
                    
                    case 'deconnexion':
                        // on appel la méthode deconnexion()
                        $this->deconnexion();
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

    protected function connexion(){    
        
        //on démarre la session php
        session_start();


        if(isset($_POST['connexion'])){

            //On vérifie si le formulaire à été envoyé
            if(!empty($_POST)){
                //Le formulaire à été envoyé 
                //On vérifie tous les champs
                if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email'] && !empty($_POST['password']))){
                
                    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                        die("l'adresse mail est incorrecte");
                    }

                    //on se connecte à la bdd
                    $mysql = Mysql::getInstance();
                    $pdo = $mysql->getPDO();

                    //user
                    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
                    $query->bindValue(":email", $_POST['email'], $pdo::PARAM_STR);
                    $query->execute();
                    $user = $query->fetch();

                    //admin
                    $query = $pdo->prepare("SELECT * FROM admin WHERE email = :email");
                    $query->bindValue(":email", $_POST['email'], $pdo::PARAM_STR);
                    $query->execute();
                    $admin = $query->fetch();

                    if($user){
                        if(!$user){
                            die("l'utilisateur n'existe pas");
                        }
        
                        //On a un user existant, on peut vérifier le mot de passe
                        if(!password_verify($_POST['password'], $user['password'])){
                            die("l'utilisateur et/ou le mot de passe incorrect");
                        }
                        
                        //on stock dans $_SESSION les informations de l'utilisateur
                        $_SESSION['user'] = [
                            "id" => $user["id"],
                            "name" => $user["name"],
                            "surname" => $user["surname"],
                            "email" => $user["email"]
                        ];
                        
                        //on peut rediriger vers la page de profil
                        header("location: ./index.php?controller=user&action=membre");
                        

                    } elseif($admin){

                        if(!$admin){
                            die("l'admin n'existe pas");
                        }
        
                        //On a un admin existant, on peut vérifier le mot de passe
                        if(!password_verify($_POST['password'], $admin['password'])){
                            die("l'admin et/ou le mot de passe incorrect");
                        }
                        
                        //on stock dans $_SESSION les informations de l'utilisateur
                        $_SESSION['admin'] = [
                            "id" => $admin["id"],
                            "pseudo" => $admin["pseudo"],
                            "email" => $admin["email"],
                        ];
                        
                        //on peut rediriger vers la page du panneau admin
                        header("location: ./index.php?controller=admin&action=pannel");
                        
                    }

                }
            }
        }
    }

    protected function deconnexion(){
        session_start();
        if(!isset($_SESSION["user"])){
            header("location: ./index.php?controller=home&action=show");
            exit;
        }
        //unset() permet de supprimer une variable
        unset($_SESSION["user"]);

        header("location: ./index.php?controller=home&action=show");
    }
 
}