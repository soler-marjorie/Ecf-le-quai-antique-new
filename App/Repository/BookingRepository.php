<?php


namespace App\Repository;

use App\Model\Booking;
use App\Db\Mysql;


class BookingRepository
{
   
    public function bookingForm()
    {
        //on se connecte à la bdd
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();
        
    } 
}