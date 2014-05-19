<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RessourceController extends Controller
{
    public function indexAction($jeu) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');
        
        // Vérifie si le user est connecté
        if (empty($compte_session)) {
            $message = "Vous devez etre connecté pour accéder aux ressources";
            // Message d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', $message
            );
            return $this->redirect($this->generateUrl('common_homepage'));
        }
        
        
        return $this->render('WebMetaCommonBundle:Ressource:index_ressource.html.twig');
    }
}
