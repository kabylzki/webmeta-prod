<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Page;
use WebMeta\CommonBundle\Entity\Compte;
use WebMeta\CommonBundle\Form\PageType;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller {

    // Affiche la page voulue
    public function viewAction($id) {
        $page = $this->getDoctrine()->getRepository('WebMetaCommonBundle:Page')->find($id);

        return $this->render('WebMetaCommonBundle:Page:page.html.twig', array("page" => $page));
    }

    // Affiche le formulaire d'ajout de page
    public function creationAction() {
        $page = new Page();
        $form = $this->createForm(new PageType(), $page);
        $session = $this->get('session');
        $compte_session = $session->get('compte');

        // Verifie si l'utilisateur est admin
        if (!$compte_session->getIsAdmin()) {
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'error', "Accès refusé"
            );

            return $this->redirect($this->generateUrl('common_homepage'));
        }

        return $this->render('WebMetaCommonBundle:Page:creation.html.twig', array('form' => $form->createView()));
    }

    // Validation du formulaire d'ajout de page
    public function validationAction(Request $request) {
        $page = new Page();

        $form = $this->createForm(new PageType(), $page);
        $form->handleRequest($request);

        // Transforme l'objet "NomCategorie" (id,nom) en string (nom) avant l'insertion en BDD
        $page->setNomCategorie($page->getNomCategorie()->getNom());
        // Récupère et Set la date courante dans "DatePublication"
        $page->setDatePublication(new \DateTime());

        // Si le formulaire est valide alors on insert
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            $message = "La page a été créée avec succès";
        } else {
            $message = "Une erreur est survenue, création impossible";
        }

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', $message
        );

        return $this->redirect($this->generateUrl('page_creation'));
    }

    // Formulaire de modification d'un compte
    public function formModificationAction($id_page) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');
        
        // Verifie si l'utilisateur est admin
        if (!$compte_session->getIsAdmin()) {
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'error', "Accès refusé"
            );

            return $this->redirect($this->generateUrl('common_homepage'));
        }


        $page = $this->getDoctrine()->getManager()->getRepository('WebMetaCommonBundle:Page')->find($id_page);

        $form = $this->createForm(new PageType(), $page);
        $form->add('id', "hidden", array('data' => $id_page));

        return $this->render('WebMetaCommonBundle:Page:modification.html.twig', array('form' => $form->createView(), 'id_page' => $id_page));
    }

    // Modification d'une page
    public function modificationAction(Request $request) {
        $form = $this->createForm(new PageType());
        $form->handleRequest($request);

        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('WebMetaCommonBundle:Page')->find($id);

        // Save
        $page->setTitre($form["titre"]->getData());
        $page->setNomLien($form["nom_lien"]->getData());
        $page->setUrlAlias($form["url_alias"]->getData());
        $page->setNomCategorie($form["nom_categorie"]->getData()->getNom());
        $page->setContenu($form["contenu"]->getData());

        $em->flush();

        $message = "Page Modifiée avec succès";
        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', $message
        ); 

        return $this->redirect($this->generateUrl('common_homepage'));
    }

    public function suppressionAction($id_page) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');

        // Verifie si l'utilisateur est admin
        if (!$compte_session->getIsAdmin()) {
            // Message de confirmation pour l'utilisateur
            $this->get('session')->getFlashBag()->add(
                    'error', "Accès refusé"
            );

            return $this->redirect($this->generateUrl('common_homepage'));
        }
        
        $em = $this->getDoctrine()->getManager();

        // Suppression du membre de l'équipe
        $page = $em->getRepository('WebMetaCommonBundle:Page')->find($id_page);
        if (!$page) {
            // Si le post n'exsite pas message flash d'erreur
            $this->get('session')->getFlashBag()->add(
                    'error', "La page n'existe pas"
            );

            return $this->redirect($this->generateUrl('common_homepage'));
        }

        $em->remove($page);
        $em->flush();

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', "Page supprimée avec succès"
        );

        return $this->redirect($this->generateUrl('common_homepage'));
    }

}
