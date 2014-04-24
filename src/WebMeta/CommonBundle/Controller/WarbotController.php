<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WarbotController extends Controller {

    public function indexAction() {
        $user_connected = false;
        $session = $this->get('session');
        $compte = $session->get('compte');
        if ($compte != null) {
            // gestion utilisateur connecté
            $user_connected = true;
        }


        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByNomCategorie("Warbot");

        return $this->render('WebMetaCommonBundle:Warbot:index_warbot.html.twig', array("liste_page" => $liste_page, 'user_connected' => $user_connected));
    }

    public function documentationAction() {
        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByNomCategorie("Warbot - Documentation");

        return $this->render('WebMetaCommonBundle:Warbot:documentation_warbot.html.twig', array("liste_page" => $liste_page));
    }

    

}
