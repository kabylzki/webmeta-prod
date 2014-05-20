<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Equipe;
use WebMeta\CommonBundle\Entity\InvitationEquipe;
use WebMeta\CommonBundle\Entity\Membre;
use WebMeta\CommonBundle\Entity\Message;
use WebMeta\CommonBundle\Form\EquipeType;
use Symfony\Component\HttpFoundation\Request;

class EquipeController extends Controller {

    public function indexAction($id) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');
        $is_membre = false;
        $is_leader = false;

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

        $liste_leader = $em->getRepository('WebMetaCommonBundle:Membre')->findAllMembreEquipe($id, 'Leader');
        $liste_membre = $em->getRepository('WebMetaCommonBundle:Membre')->findAllMembreEquipe($id, 'Membre');

        $liste_totale = array_merge($liste_leader ,$liste_membre);
        // Vérifie sur l'utilisateur connecté fait partie de l'équipe
        foreach ($liste_membre as $memb) {
            if ($memb->getId() == $compte_session->getId()) {
                $is_membre = true;
            }
        }
        // Vérifie sur l'utilisateur connecté fait partie de l'équipe
        foreach ($liste_leader as $memb_leader) {
            if ($memb_leader->getId() == $compte_session->getId()) {
                $is_leader = true;
            }
        }

        $nb_membre = count($liste_totale);
        
        // Récupération de la liste des joueurs en attente pour rejoindre l'équipe
        $liste_id_membre_attente = $em->getRepository('WebMetaCommonBundle:InvitationEquipe')->findAllDemandeMembre($id);
        
        // Boucle sur la liste des ID de compte et charge leurs informations
        $liste_membre_attente = array();
        foreach ($liste_id_membre_attente as $un_compte) {
            $compte = $em->getRepository('WebMetaCommonBundle:Compte')->find($un_compte['id_compte']);
            array_push($liste_membre_attente, $compte);
        }
        
        $nb_membre_attente = count($liste_membre_attente);
        
        return $this->render('WebMetaCommonBundle:Equipe:index_equipe.html.twig', array('equipe' => $equipe, 'liste_leader' => $liste_leader,'liste_membre' => $liste_membre, 'nb_membre' => $nb_membre, 'is_membre' => $is_membre,'is_leader' => $is_leader, 'liste_membre_attente' => $liste_membre_attente, 'nb_membre_attente' => $nb_membre_attente));
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
                    'error', "Vous avez déjà postulé pour cette équipe, veuillez attendre la réponse de la part d'un leader"
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
            $membre->setDateRecrutement(new \DateTime());
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

        // Suppression de l'équipe si le dernier membre quitte l'équipe
        if ($last) {
            $equipe = $em->getRepository('WebMetaCommonBundle:Equipe')->find($id_equipe);
            $em->remove($equipe);
            $em->flush();
        }

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Equipe quitée avec succès "
        );

        return $this->redirect($this->generateUrl('compte_view', array("id" => $id_compte)));
    }
    
    public function recrutementAction($id_equipe, $id_compte, $accept = "allow") {
        $session = $this->get('session');
        $compte = $session->get('compte');

        $em = $this->getDoctrine()->getManager();

        $nom_equipe = $em->getRepository('WebMetaCommonBundle:Equipe')->findNomByIdEquipe($id_equipe);

        if ($accept == "allow") {
            // Save du Membre
            $membre = new Membre();
            $em->getRepository('WebMetaCommonBundle:Membre');

            $membre->setId($id_compte);
            $membre->setIdEquipe($id_equipe);
            $membre->setStatus("Membre");
            $membre->setDateRecrutement(new \DateTime());
            $em->persist($membre);
            $em->flush();   
            
            // Supprime la demande d'invitation
            $invitation_equipe = $em->getRepository('WebMetaCommonBundle:InvitationEquipe')->findBy(array("id_compte" => $id_compte, "id_equipe" => $id_equipe));
            $em->remove($invitation_equipe[0]);
            $em->flush();
            
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'notice', "Membre recruté"
            );
            
            // Message info user accepté
            $message = new Message();
            $em->getRepository('WebMetaCommonBundle:Message');
            $message->setIdExpediteur(0);
            $message->setIdReceveur($id_compte);
            $message->setTitre("[Equipe] - ".$nom_equipe[0]['nom']." - Demande acceptée");
            $message->setContenu("Votre demande pour l'équipe <a href='".$this->generateUrl('equipe_view', array("id" => $id_equipe))."'>".$nom_equipe[0]['nom']."</a> a été acceptée");
            $message->setDateExpedition(new \DateTime());
            $message->setStatut("non-lu");
            $em->persist($message);
            $em->flush();   
            
        } else {
            // Supprime la demande d'invitation
            $invitation_equipe = $em->getRepository('WebMetaCommonBundle:InvitationEquipe')->findBy(array("id_compte" => $id_compte, "id_equipe" => $id_equipe));
            $em->remove($invitation_equipe[0]);
            $em->flush();
            
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'notice', "Membre refusé"
            );
            
            // Message info user refusé
            $message = new Message();
            $em->getRepository('WebMetaCommonBundle:Message');
            $message->setIdExpediteur(0);
            $message->setIdReceveur($id_compte);
            $message->setTitre("[Equipe] - ".$nom_equipe[0]['nom']." - Demande refusée");
            $message->setContenu("Votre demande pour l'équipe <a href='".$this->generateUrl('equipe_view', array("id" => $id_equipe))."'>".$nom_equipe[0]['nom']."</a> a été refusée");
            $message->setDateExpedition(new \DateTime());
            $message->setStatut("non-lu");
            $em->persist($message);
            $em->flush();   
        }

        return $this->redirect($this->generateUrl('equipe_view', array("id" => $id_equipe)));
    }

    // Passage des droits de leader
    public function devenirLeaderAction($id_equipe, $id) {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('WebMetaCommonBundle:Membre')->findOneBy(array('id'=>$id,'id_equipe' => $id_equipe));

        if (!$membre) {
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'error', "Le membre n'existe pas"
            );
        }

        $membre->setStatus('Leader');
        $em->flush();
        
        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Le membre est devenu leader"
        );

        return $this->redirect($this->generateUrl('equipe_view', array("id" => $id_equipe)));
    }
    
   
    
}
