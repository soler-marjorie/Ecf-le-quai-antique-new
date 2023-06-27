<?php

namespace App\Controller;

use App\Repository\BookingRepository;
use App\Repository\ValidateRepository;

class BookController extends Controller 
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
                    
                    case 'check':
                        // on appel la méthode check()
                        $this->check();
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

                $bookingRepository = new BookingRepository();
                //on appel notre méthode qui va nous retourner un livre
                $booking = $bookingRepository->bookingForm();

                $this->render('booking/bookingForm', [
                    'book' => $booking
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

    protected function check()
    {     
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];
                //charger le livre par un appel au repository

                $validateRepository = new ValidateRepository();
                //on appel notre méthode qui va nous retourner un livre
                $validate = $validateRepository->validate($id);

                $this->render('booking/validate', [
                    'book' => $validate
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