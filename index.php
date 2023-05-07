<?php 
//on appel spl autoload register qui s'assure de faire les include sans que l'on s'en occupe
spl_autoload_register();

//chargement du controller principal
use App\Controller\Controller;

//Crétaion d'un controller parent
$controller = new Controller();
//on appel la méthode du controller
$controller->route()
?>