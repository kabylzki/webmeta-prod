<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Equipe;
use WebMeta\CommonBundle\Form\EquipeType;
use Symfony\Component\HttpFoundation\Request;

class EquipeController extends Controller {

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
                $message = "Ce nom d'équipe existe déjà";
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

}
