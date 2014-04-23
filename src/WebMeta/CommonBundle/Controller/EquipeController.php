<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Equipe;
use WebMeta\CommonBundle\Form\EquipeType;
use WebMeta\CommonBundle\Entity\Membre;
use Symfony\Component\HttpFoundation\Request;

class EquipeController extends Controller {

    public function indexAction($id) {
        $em = $this->getDoctrine()->getManager();
        
        $equipe = $em->getRepository('WebMetaCommonBundle:Equipe')->find($id);
            
        $liste_membre = $em->getRepository('WebMetaCommonBundle:Membre')->findAllMembreEquipe($id);

        return $this->render('WebMetaCommonBundle:Equipe:index_equipe.html.twig', array('equipe' => $equipe, 'liste_membre' => $liste_membre));
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

        $session = $this->get('session');
        $compte_session = $session->get('compte');

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $check_equipe = $em->getRepository('WebMetaCommonBundle:Equipe')->findBy(array("nom" => $form["nom"]->getData()));
            if (!empty($check_equipe)) {
                $message = "Le nom d'équipe '".$form["nom"]->getData()."' existe déjà";
                // Message d'erreur
                $this->get('session')->getFlashBag()->add(
                        'error', $message
                );
            
                return $this->redirect($this->generateUrl('equipe_creation'));
            }
            
            // Save
            $equipe->setNom($form["nom"]->getData());
            $equipe->setIdCompte($compte_session->getId());
            $equipe->setPresentation($form["presentation"]->getData());
            $em->persist($equipe);
            $em->flush();
            $id_equipe = $equipe->getId();

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

    
    public function quitAction($id_equipe) {
        $session = $this->get('session');
        $compte = $session->get('compte');
        
        $id_compte = $compte->getId();
        
        $em = $this->getDoctrine()->getManager();
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

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Equipe quitée avec succès "
        );

        return $this->redirect($this->generateUrl('compte_view', array("id" => $id_compte)));
    }
    
}
