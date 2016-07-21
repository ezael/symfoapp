<?php

namespace ServicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MenuController
{
    private $menu;
    
    public function create($role)
    {
        switch ($role)
        {
            case "A": 
            default:
               $this->menu = [
                    [
                        "url"   => "/test1",
                        "nom"   => "menu1",
                    ],
                    [
                        "url"   => "/test2",
                        "nom"   => "menu2",
                    ],
                    [
                        "url"   => "/test3",
                        "nom"   => "menu3",
                    ],
               ];
               break;
        }
        
        return $this->menu;
    }
}
