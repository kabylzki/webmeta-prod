<?php

namespace WebMeta\CommonBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

use WebMeta\CommonBundle\Entity\Tournoi;
use WebMeta\CommonBundle\Entity\Invitation;
use WebMeta\CommonBundle\Entity\Rencontre;


use WebMeta\CommonBundle\Form\TournoiType;

class TournoiController extends Controller {

    public function tournoiAction() {
        $session = $this->get('session');
        $compte = $session->get('compte');
        $em = $this->getDoctrine()->getManager();
        $liste_tournoi = $em->getRepository('WebMetaCommonBundle:Tournoi')->findBy(array("id_compte" => $compte->getId()));


        return $this->render('WebMetaCommonBundle:Tournoi:tournoi.html.twig', array("liste_tournoi" => $liste_tournoi));
    }

    public function creationTournoiAction() {
        $tournoi = new Tournoi();
        $form = $this->createForm(new TournoiType(), $tournoi);

        return $this->render('WebMetaCommonBundle:Tournoi:creation.html.twig', array('form' => $form->createView()));
    }

    public function validationAction(Request $request) {
        //récupération de la session
        $session = $this->get('session');
        $compte = $session->get('compte');

        $tournoi = new Tournoi();

        $form = $this->createForm(new TournoiType(), $tournoi);

        $form->handleRequest($request);

        // Si le formulaire est valide alors on insert
        if ($form->isValid()) {
            //on attribue le tournoi au user et on affecte le statut en attente
            $tournoi->setIdCompte($compte->getId());
            $tournoi->setStatut("enAttente");

            //persistance des données en base
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournoi);
            $em->flush();

            $message = "Votre tournoi a été crée avec succès";
        } else {
            $message = "Une erreur est survenue, création impossible";
        }

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', $message
        );

        return $this->redirect($this->generateUrl('tournoi_warbot'));
    }

    public function gestionTournoiAction($id, Request $request) {
        //session
        $session = $this->get('session');
        $compte = $session->get('compte');

        //récupération du tournoi courant
        $t = $this->getDoctrine()
                  ->getManager();
        $tournoi = $t->getRepository('WebMetaCommonBundle:Tournoi')
                     ->findOneById($id);

        //objet doctrine pour récupérer les invitations
        $inv = $this->getDoctrine()
                    ->getManager();

        ##################################equipes#######################################
        //tableau des id des  equipes invités
        $liste_teamId= $inv->getRepository('WebMetaCommonBundle:Invitation')
                            ->findBy(array('idTournoi' => $id, 'statut' => 'accepted'));

        //tableau des noms des equipes
         $liste_team = array();
         for($i=0; $i <count($liste_teamId);$i++){
             array_push( $liste_team , $inv->getRepository('WebMetaCommonBundle:Equipe')
                                           ->findOneById($liste_teamId[$i]->getIdInvite()));
         }


        ##############################rencontre########################################
        //génération des rencontres pour le mode coupe
         $rencontre=new Rencontre();
         if(count($liste_team)==8 and $tournoi->getStatut()=="enAttente"){
             //le tournoi est pret a etre lancé
             $tournoi->setStatut("pret");

             // persistance en bdd
             $em = $this->getDoctrine()->getManager();
             $em->persist($tournoi);
             $em->flush();

             //generation des rencontres
             for($i=0; $i < count($liste_teamId)-1 ; $i=$i+2){
                 $rencontre->setIdequipe1($liste_teamId[$i]->getIdInvite())
                           ->setIdequipe2($liste_teamId[$i+1]->getIdInvite())
                           ->setIdTournoi($id)
                           ->setDate(new \DateTime('today'));

                 //persistance des données en base
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($rencontre);
                 $em->flush();
                 $em->clear();#pour pouvoir inserer des entités en base de donnée  dans une boucle
             }



         }
        #########################invitation###############################################
        //envoi d'invitation pour participer a un tournoi
        $invitation = new Invitation();
        $invitation->setIdTournoi($tournoi->getId());

        //formulaire d'envoie d'invitation à une équipe
        $formInvitation = $this->createFormBuilder($invitation)
                               ->add('idInvite', 'text', array('label' => 'nom de l\'equipe:'))
                               ->add('valider', 'submit')
                               ->getForm();


        //validation formulaire d'envoi de l'invitation
        $formInvitation->handleRequest($request);
        if ($formInvitation->isValid()) {

            //on fait correspondre le nom de l'équipe a son id  pour pouvoir insérer la ligne en base
            $nomE = $invitation->getIdInvite();
            $tmp= $t->getRepository('WebMetaCommonBundle:Equipe')
                    ->findOneByNom($nomE);
            if($tmp){
                $invitation->setIdInvite($tmp->getId());

                //configuration de la ligne a insérer en base
                $invitation->setStatut("accepted");
                $invitation->setIdTournoi($id);
                $invitation->setIdCreateur($compte->getId());

                // persistance en bdd
                $em = $this->getDoctrine()->getManager();
                $em->persist($invitation);
                $em->flush();
                $message = "invitation envoyée";

            }
            else{
                $message = "équipe introuvable";
            }

            //message de notification
            $this->get('session')->getFlashBag()->add('notice', $message);

        }


         return $this->render('WebMetaCommonBundle:Tournoi:gestion_tournoi.html.twig', array('liste_team' => $liste_team,'tournoi' => $tournoi, 'formInvitation' => $formInvitation->createView()));




    }

}
