<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Page;

class DefaultController extends Controller {

    // Affiche la page d'accueil
    public function indexAction() {
        return $this->render('WebMetaCommonBundle:Default:index.html.twig');
    }

    // Affiche la liste des pages de documentations
    public function documentationAction() {
        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByCategorie();

        return $this->render('WebMetaCommonBundle:Default:documentation.html.twig', array ("liste_page" => $liste_page));
    }

    // Affiche la liste des pages de tutoriels
    public function tutorielsAction() {
        
        // TODO liste des pages des pages tuto
        return $this->render('WebMetaCommonBundle:Default:tutoriels.html.twig');
    }

    // Affiche la liste des pages de FAQ
    public function faqAction() {
        
        // TODO liste des pages faq
        return $this->render('WebMetaCommonBundle:Default:faq.html.twig');
    }

    // Affiche le formulaire de contact
    public function contactAction() {
        
        // TODO formulaire de contact
        return $this->render('WebMetaCommonBundle:Default:contact.html.twig');
    }

}
