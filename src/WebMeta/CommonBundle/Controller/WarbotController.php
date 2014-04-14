<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WarbotController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByNomCategorie("Warbot");
        
        return $this->render('WebMetaCommonBundle:Warbot:index_warbot.html.twig', array ("liste_page" => $liste_page));
    }
    
    public function documentationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByNomCategorie("Warbot - Documentation");
        
        return $this->render('WebMetaCommonBundle:Warbot:documentation_warbot.html.twig', array ("liste_page" => $liste_page));
    }

    public function tournoiAction()
    {
        return $this->render('WebMetaCommonBundle:Warbot:tournoi.html.twig');
    }
}
