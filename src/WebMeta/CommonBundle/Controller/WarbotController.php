<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Tournoi;
use WebMeta\CommonBundle\Form\TournoiType;
use Symfony\Component\HttpFoundation\Request;

class WarbotController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByNomCategorie("Warbot");
        
        return $this->render('WebMetaCommonBundle:Warbot:index_warbot.html.twig', array ("liste_page" => $liste_page));
    }
    
    public function documentationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $liste_page = $em->getRepository('WebMetaCommonBundle:Page')
                ->findAllPageByNomCategorie("Warbot - Documentation");
        
        return $this->render('WebMetaCommonBundle:Warbot:documentation_warbot.html.twig', array ("liste_page" => $liste_page));
    }

    public function tournoiAction()
    {
        return $this->render('WebMetaCommonBundle:Warbot:tournoi.html.twig');
    }

    public function creationTournoiAction() {
        $tournoi = new Tournoi();
        $form = $this->createForm(new TournoiType(), $tournoi);

        return $this->render('WebMetaCommonBundle:Warbot:creation.html.twig', array('form'=>$form->createView()));
    }

    public function validationAction(Request $request) {
        $tournoi = new Tournoi();

        $form = $this->createForm(new TournoiType(), $tournoi);

        $form->handleRequest($request);

        // Si le formulaire est valide alors on insert
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournoi);
            $em->flush();

            $message = "Votre tournoi a été crée avec succès";
        } else {
            $message = "Une erreur est survenue, création impossible";
        }

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
            'notice',
            $message
        );

        return $this->redirect($this->generateUrl('warbot_tournoi'));
    }
}
