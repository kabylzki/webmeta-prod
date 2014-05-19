<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MetacivController extends Controller
{
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
                ->findAllPageByNomCategorie("Metaciv");

        return $this->render('WebMetaCommonBundle:Metaciv:index_metaciv.html.twig', array("liste_page" => $liste_page, 'user_connected' => $user_connected));
    }
    
    public function documentationAction() {
        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByNomCategorie("Metaciv - Documentation");

        return $this->render('WebMetaCommonBundle:Metaciv:documentation_metaciv.html.twig', array("liste_page" => $liste_page));
    }
    
}
