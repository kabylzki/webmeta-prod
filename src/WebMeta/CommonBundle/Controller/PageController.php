<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Page;
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

}
