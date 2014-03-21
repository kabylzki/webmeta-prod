<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Page;
use WebMeta\CommonBundle\Form\PageType;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller {

    // Affiche le formulaire d'ajout de page
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

        // Transforme l'objet "IdCategorie" (id,nom) en int (id) avant l'insertion en BDD
        $page->setIdCategorie($page->getIdCategorie()->getId());

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
