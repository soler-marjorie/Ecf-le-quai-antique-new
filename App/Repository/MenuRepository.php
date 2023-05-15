<?php

namespace App\Repository;

use App\Model\Menu;

class MenuRepository
{
    public function findOneById(int $id) 
    {
        //appel de la BDD
        $menu = ['id' => 1, 'title' => 'titre test', 'description' => 'description test'];

        $menuRepository = new Menu();
        /*
        $menuRepository->setId($menu['id']);
        $menuRepository->setTitle($menu['title']);
        $menuRepository->setDescription($menu['description']);
        */

        foreach ($menu as $key => $value) {
            $menuRepository->{'set'}($value);
        }



        return $menuRepository;
    }
}