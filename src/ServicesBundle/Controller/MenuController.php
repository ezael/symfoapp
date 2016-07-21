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
                        "nom"   => "menu1x",
                    ],
                    [
                        "url"   => "/test2",
                        "nom"   => "menu2x",
                    ],
                    [
                        "url"   => "/test3",
                        "nom"   => "menu3x",
                    ],
               ];
               break;
        }
        
        return $this->menu;
    }
}
