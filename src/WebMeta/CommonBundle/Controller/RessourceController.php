<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Ressource;

class RessourceController extends Controller {

    public function indexAction() {
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

    public function uploadAction() {
        $ressource = new Ressource();
        
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
        
        // Liste des types de ressources
        $liste_type_ressource = array(
            "doc" => "Document (img, doc, pdf etc ...)",
            "ia" => "IA (Warbot)",
            "modele" => "Modèle (Metaciv)", 
            "autre" => "Autre"
            );
        
        $form = $this->createFormBuilder($ressource)
                ->add('name', "text", array('label' => "Nom du fichier"))
                ->add('type','choice', array('choices' => $liste_type_ressource,'required'  => true, 'empty_value' => '---',))
                ->add('is_public', "checkbox", array('label' => "Public ?", 'required'  => false))
                ->add('lien', "url", array('label' => "Lien associé (http:// ...)", 'required'  => false))
                ->add('id_compte', "hidden", array('data' => $compte_session->getId()))
                ->add('file', 'file', array('label' => "Votre fichier"))
                ->getForm();

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();

                    $em->persist($ressource);
                    $em->flush();

                    $message = "Ressource envoyée avec succès";
                    // Message d'erreur
                    $this->get('session')->getFlashBag()->add(
                            'notice', $message
                    );
                    
                    return $this->redirect($this->generateUrl('ressource_upload'));
               } else {
                    $message = "Erreur lors de l'envoi de votre ressource";
                    // Message d'erreur
                    $this->get('session')->getFlashBag()->add(
                            'error', $message
                    );
               }
        }

        return $this->render('WebMetaCommonBundle:Ressource:upload.html.twig', array('form' => $form->createView()));
    }
    
    
    public function suppressionAction($id) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');

        // Si la session n'est pas intialisée (utilisateur non connecté)
        if (empty($compte_session)) {
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'notice', "Vous devez être connecté pour accéder à cette page"
            );

            return $this->redirect($this->generateUrl('common_homepage'));
        }

        $em = $this->getDoctrine()->getManager();

        // Suppression du membre de l'équipe
        $ressource = $em->getRepository('WebMetaCommonBundle:Ressource')->find($id);
        if (!$ressource) {
            // Si le post n'exsite pas message flash d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', "La ressource n'existe pas"
            );

            return $this->redirect($this->generateUrl('compte_view', array("id"=>$compte_session->getId())));
        }
        
        $em->remove($ressource);
        $em->flush();

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Ressource supprimée avec succès"
        );

        return $this->redirect($this->generateUrl('compte_view', array("id"=>$compte_session->getId())));
    }
    
    public function changePublicAction($id) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');

        // Si la session n'est pas intialisée (utilisateur non connecté)
        if (empty($compte_session)) {
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'notice', "Vous devez être connecté pour accéder à cette page"
            );

            return $this->redirect($this->generateUrl('common_homepage'));
        }

        $em = $this->getDoctrine()->getManager();

        // Suppression du membre de l'équipe
        $ressource = $em->getRepository('WebMetaCommonBundle:Ressource')->find($id);
        if (!$ressource) {
            // Si le post n'exsite pas message flash d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', "La ressource n'existe pas"
            );

            return $this->redirect($this->generateUrl('compte_view', array("id"=>$compte_session->getId())));
        }
        
        $em->remove($ressource);
        $em->flush();

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Ressource supprimée avec succès"
        );

        return $this->redirect($this->generateUrl('compte_view', array("id"=>$compte_session->getId())));
    }

}
