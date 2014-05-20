<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Message;
use WebMeta\CommonBundle\Entity\MessageRepository;
use WebMeta\CommonBundle\Form\MessageType;

/**
 * Message controller.
 *
 */
class MessageController extends Controller {

    public function listeAction() {
        $session = $this->get('session');
        $compte_session = $session->get('compte');
        $new_message = false;

        // Si la session n'est pas intialisée (utilisateur non connecté)
        if (empty($compte_session)) {
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'notice', "Vous devez être connecté pour accéder à cette page"
            );

            return $this->redirect($this->generateUrl('common_homepage'));
        }

        $liste_message = $this->getDoctrine()->getRepository('WebMetaCommonBundle:Message')->findBy(array("id_receveur" => $compte_session->getId()), array('date_expedition' => 'DESC'));


        foreach ($liste_message as $message) {
            if ($message->getStatut() == "non lu") {
                $new_message = true;
            }
            // Si l'id de l'expéditeur est 0 alors l'expéditeur est WebMeta
            if ($message->getIdExpediteur() == 0) {
                $message->setIdExpediteur("WebMeta");
            } else {
                // Récupère le pseudo de l'expéditeur
                $pseudo = $this->getDoctrine()->getRepository('WebMetaCommonBundle:Message')->findPseudoByIdExpediteur($message->getIdExpediteur());
                $message->setIdExpediteur($pseudo[0]['pseudo']);
            }
        }

        return $this->render('WebMetaCommonBundle:Message:liste.html.twig', array('liste_message' => $liste_message));
    }

    public function viewAction($id) {
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

        $message = $this->getDoctrine()->getRepository('WebMetaCommonBundle:Message')->find($id);
        if (empty($message)) {
            return $this->redirect($this->generateUrl('common_homepage'));
        }
        // Si l'id de l'expéditeur est 0 alors l'expéditeur est WebMeta
        if ($message->getIdExpediteur() == 0) {
            $message->setIdExpediteur("WebMeta");
        } else {
            // Récupère le pseudo de l'expéditeur
            $pseudo = $this->getDoctrine()->getRepository('WebMetaCommonBundle:Message')->findPseudoByIdExpediteur($message->getIdExpediteur());
            $message->setIdExpediteur($pseudo[0]['pseudo']);
        }

        // Marque le message comme lu à la lecture
        $this->getDoctrine()->getRepository('WebMetaCommonBundle:Message')->marqueMessageLu($id);

        return $this->render('WebMetaCommonBundle:Message:view.html.twig', array('message' => $message));
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
        $message = $em->getRepository('WebMetaCommonBundle:Message')->find($id);
        if (!$message) {
            // Si le post n'exsite pas message flash d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', "La message n'existe pas"
            );

            return $this->redirect($this->generateUrl('message_liste'));
        }

        $em->remove($message);
        $em->flush();

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Message supprimée avec succès"
        );

        return $this->redirect($this->generateUrl('message_liste'));
    }

}
