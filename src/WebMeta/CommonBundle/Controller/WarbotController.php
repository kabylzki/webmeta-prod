<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Tournoi;
use WebMeta\CommonBundle\Entity\Invitation;
use WebMeta\CommonBundle\Entity\Rencontre;
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
        $em = $this->getDoctrine()->getManager();
        $liste_tournoi = $em->getRepository('WebMetaCommonBundle:Tournoi')
                             ->findAll();


        return $this->render('WebMetaCommonBundle:Warbot:tournoi.html.twig', array ("liste_tournoi" => $liste_tournoi));
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

    public function gestionTournoiAction($id, Request $request){
        $t=$this->getDoctrine()
                ->getManager();
        $tournoi=$t->getRepository('WebMetaCommonBundle:Tournoi')
                   ->findOneById($id);

        $inv = $this->getDoctrine()
                     ->getManager();
        $renc = $this->getDoctrine()
                     ->getManager();

        //tableau des invitations
        $liste_team= $inv->getRepository('WebMetaCommonBundle:Invitation')
                         ->findBy(array('idTournoi'=>$id,'statut' =>'accepted'));

        //tableau des matchs
        $liste_match=$renc->getRepository('WebMetaCommonBundle:Rencontre')
                          ->findByIdTournoi($id);


        //formulaire d'ajout de rencontre
        $rencontre = new Rencontre();
        $rencontre->setIdTournoi($tournoi->getId());
        $rencontre->setDate(new \DateTime('today'));

        $formRencontre = $this->createFormBuilder($rencontre)
                                ->add('idequipe1','text',array('label' => 'equipe1:'))
                                ->add('idequipe2','text' ,array('label' => 'equipe2:'))
                                ->add('date','date')
                                ->add('valider', 'submit')
                                ->getForm();

        //validation formulaire de rencontre
        $formRencontre->handleRequest($request);

        if ($formRencontre->isValid()) {

            // persistance en bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($rencontre);
            $em->flush();
            return $this->redirect($this->generateUrl(path('warbot_tournoi_gestion_tournoi', array('id'=> $tournoi.getId()))));
        }



        return $this->render('WebMetaCommonBundle:Warbot:gestionTournoi.html.twig', array('liste_team' =>$liste_team, 'liste_match' =>$liste_match ,'tournoi' =>$tournoi, 'formRencontre' =>$formRencontre->createView()));
    }
}
