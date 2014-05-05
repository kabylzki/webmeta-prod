<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Equipe;
use WebMeta\CommonBundle\Entity\InvitationEquipe;
use WebMeta\CommonBundle\Entity\Membre;
use WebMeta\CommonBundle\Form\EquipeType;
use Symfony\Component\HttpFoundation\Request;

class EquipeController extends Controller {

    public function indexAction($id) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');
        $is_membre = false;

        $em = $this->getDoctrine()->getManager();

        $equipe = $em->getRepository('WebMetaCommonBundle:Equipe')->find($id);
        // Vérifie si l'équipe existe
        if (!$equipe) {
            $message = "L'équipe n'existe pas";
            // Message d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', $message
            );

            return $this->redirect($this->generateUrl('compte_view', array('id' => $compte_session->getId())));
        }

        $liste_membre = $em->getRepository('WebMetaCommonBundle:Membre')->findAllMembreEquipe($id);

        // Vérifie sur l'utilisateur connecté fait partie de l'équipe
        foreach ($liste_membre as $memb) {
            if ($memb->getId() == $compte_session->getId()) {
                $is_membre = true;
            }
        }

        $nb_membre = count($liste_membre);

        return $this->render('WebMetaCommonBundle:Equipe:index_equipe.html.twig', array('equipe' => $equipe, 'liste_membre' => $liste_membre, 'nb_membre' => $nb_membre, 'is_membre' => $is_membre));
    }

    // Affiche la liste des équipes
    public function listeAction() {
        $em = $this->getDoctrine()->getManager();

        $liste_equipe = $em->getRepository('WebMetaCommonBundle:Equipe')->findAll();

        return $this->render('WebMetaCommonBundle:Equipe:liste.html.twig', array('liste_equipe' => $liste_equipe));
    }

    // Affiche la liste des équipes
    public function postulerAction($id_equipe) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');
        $em = $this->getDoctrine()->getManager();

        // Suppression du membre de l'équipe
        $check_invitation = $em->getRepository('WebMetaCommonBundle:InvitationEquipe')->findBy(array('id_equipe' => $id_equipe, 'id_compte' => $compte_session->getId(), 'statut' => 'en attente', 'demandeur' => 'joueur'));

        if ($check_invitation) {
            // Si le post n'exsite pas message flash d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', "Vous avez déjà postulé pour cette équipe, veuillez attendre la réponse de la part du leader"
            );

            return $this->redirect($this->generateUrl('compte_view', array("id" => $compte_session->getId())));
        }

        $invitation_equipe = new InvitationEquipe();
        $invitation_equipe->setIdEquipe($id_equipe);
        $invitation_equipe->setIdCompte($compte_session->getId());
        $invitation_equipe->setStatut('en attente');
        $invitation_equipe->setDemandeur('joueur');
        $em->persist($invitation_equipe);
        $em->flush();
        
        // Si le post n'exsite pas message flash d'erreur
        $this->get('session')->getFlashBag()->add(
                'notice', "Demande envoyée avec succès"
        );

        return $this->redirect($this->generateUrl('compte_view', array("id" => $compte_session->getId())));
    }

    public function formCreationAction() {
        $equipe = new Equipe();
        $form = $this->createForm(new EquipeType(), $equipe);

        return $this->render('WebMetaCommonBundle:Equipe:creation.html.twig', array('form' => $form->createView()));
    }

    public function creationAction(Request $request) {
        $equipe = new Equipe();

        $form = $this->createForm(new EquipeType(), $equipe);

        $form->handleRequest($request);

        // Récupère et Set la date courante dans "DateCreation"
        $equipe->setDateCreation(new \DateTime());

        $session = $this->get('session');
        $compte_session = $session->get('compte');

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $check_equipe = $em->getRepository('WebMetaCommonBundle:Equipe')->findBy(array("nom" => $form["nom"]->getData()));
            if (!empty($check_equipe)) {
                $message = "Le nom d'équipe '" . $form["nom"]->getData() . "' existe déjà";
                // Message d'erreur
                $this->get('session')->getFlashBag()->add(
                        'error', $message
                );

                return $this->redirect($this->generateUrl('equipe_creation'));
            }

            // Save Equipe
            $equipe->setNom($form["nom"]->getData());
            $equipe->setIdCompte($compte_session->getId());
            $equipe->setPresentation($form["presentation"]->getData());
            $em->persist($equipe);
            $em->flush();
            $id_equipe = $equipe->getId();

            // Save du Membre
            $membre = new Membre();
            $em_membre = $this->getDoctrine()->getManager();
            $em_membre->getRepository('WebMetaCommonBundle:Membre');

            $membre->setId($compte_session->getId());
            $membre->setIdEquipe($id_equipe);
            $membre->setStatus("Leader");
            $em_membre->persist($membre);
            $em_membre->flush();

            $message = "Equipe Créée avec succès";
        } else {
            $message = "Erreur lors de la création";
        }

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', $message
        );

        return $this->redirect($this->generateUrl('equipe_creation'));
    }

    public function quitAction($id_equipe, $last = false) {
        $session = $this->get('session');
        $compte = $session->get('compte');

        $id_compte = $compte->getId();

        $em = $this->getDoctrine()->getManager();

        // Suppression du membre de l'équipe
        $membre = $em->getRepository('WebMetaCommonBundle:Membre')->find(array("id" => $id_compte, "id_equipe" => $id_equipe));
        if (!$membre) {
            // Si le post n'exsite pas message flash d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', "Impossible de quitter l'équipe"
            );

            return $this->redirect($this->generateUrl('compte_view', array("id" => $id_compte)));
        }
        $em->remove($membre);
        $em->flush();

        if ($last) {
            $equipe = new Membre();
            $em_membre = $this->getDoctrine()->getManager();
            $em_membre->getRepository('WebMetaCommonBundle:Membre');

            $membre->setId($compte_session->getId());
            $membre->setIdEquipe($id_equipe);
            $membre->setStatus("Leader");
            $em_membre->persist($membre);
            $em_membre->flush();
        }



        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Equipe quitée avec succès "
        );

        return $this->redirect($this->generateUrl('compte_view', array("id" => $id_compte)));
    }

}
