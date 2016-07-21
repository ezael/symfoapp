<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {    
        
        $menu = $this->container->get('services_menu');
        
        /*$alerte = [
            "type"      => "danger",
            "titre"     => "Titre d' alerte",
            "contenu"   => "contenu de l'alerte, le code html est gardé : <b>TEST CODE HTML.....</b>",
        ];*/

        // replace this example code with whatever you need
        return $this->render('app/index.html.twig', [
            'titre_page'            => "Titre de la page",
            'description_page'      => "Description de la page",
            'menu'                  => $menu->create("A"),
            /*'alerte'                => $alerte,*/
        ]);
    }
}