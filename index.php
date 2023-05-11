<?php 
//répertoire racine pour aider à retrouver les chemins
define('_ROOTPATH_', __DIR__);


//on appel spl autoload register qui s'assure de faire les include sans que l'on s'en occupe
spl_autoload_register();

//chargement du controller principal
use App\Controller\Controller;

//Création d'un controller parent
$controller = new Controller();
//on appel la méthode du controller
$controller->route()
?>