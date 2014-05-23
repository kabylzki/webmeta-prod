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
        #variables de session
        $session = $this->get('session');
        $compte = $session->get('compte');

        $em = $this->getDoctrine()->getManager();

        #listes des tournois publics et tournois du tournoi
        $liste_tournoiUser=array();#contient les tournois crées par l'utilisateur il en est par defaut l'admin
        $liste_tournoiPubliques=array();#contient les autres tournois présent sur le site, il n'a que le droit de lecture


        $liste_tournoi = $em->getRepository('WebMetaCommonBundle:Tournoi')->findAll();#on recupére tous les tounois

        #on classe les tournois récupérés selon leur créateur
        for($i=0; $i <count($liste_tournoi);$i++){
            if($liste_tournoi[$i]->getIdCompte()==$compte->getId()){
                array_push($liste_tournoiUser,$liste_tournoi[$i]);
            }
            else{
                array_push($liste_tournoiPubliques,$liste_tournoi[$i]);
            }
        }


        return $this->render('WebMetaCommonBundle:Tournoi:tournoi.html.twig', array("liste_tournoiUser" => $liste_tournoiUser,"liste_tournoiPubliques" => $liste_tournoiPubliques));
    }

    public function creationTournoiAction() {
        $tournoi = new Tournoi();
        $form = $this->createForm(new TournoiType(), $tournoi);

        return $this->render('WebMetaCommonBundle:Tournoi:creation.html.twig', array('form' => $form->createView()));
    }

    public function validationAction(Request $request) {
        #varibales de sessions
        $session = $this->get('session');
        $compte = $session->get('compte');

        $tournoi = new Tournoi();

        $form = $this->createForm(new TournoiType(), $tournoi);

        #validation du formulaire
        $form->handleRequest($request);
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

             /*on supprime les anciens rencontres du tournoi */
             $em = $this->getDoctrine()->getManager();
             $rencontresP = $em->getRepository('WebMetaCommonBundle:Rencontre')->findBy(array('idTournoi' =>$id));
             for($i=0; $i <count($rencontresP);$i++){
                 $em = $this->getDoctrine()->getManager();
                 $em->remove($rencontresP[$i]);
                 $em->flush();
             }

             /*on génère les differents rencontres de la phase de pool */
             // persistance en bdd
             $em = $this->getDoctrine()->getManager();
             $em->persist($tournoi);
             $em->flush();

             //generation des rencontres
             for($i=0; $i < count($liste_teamId)-1 ; $i=$i+2){
                 $rencontre->setIdequipe1($liste_teamId[$i]->getIdInvite())
                           ->setIdequipe2($liste_teamId[$i+1]->getIdInvite())
                           ->setIdTournoi($id)
                           ->setPhase("pool")
                           ->setDate(new \DateTime('today'));

                 //persistance des données en base
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($rencontre);
                 $em->flush();
                 $em->clear();#pour pouvoir inserer des entités en base de donnée  dans une boucle
             }



         }
        #########################invitation###############################################
        $liste_nom_equipe = array();
        $items=$inv->getRepository('WebMetaCommonBundle:Equipe')->findAll();
        for($i=0; $i <count($items);$i++){
           $liste_nom_equipe[$items[$i]->getNom()]=$items[$i]->getNom();
        }

        //formulaire d'envoie d'invitation à une équipe
        $formInvitation = $this->createFormBuilder()
                               ->add('equipe','choice', array('choices' => $liste_nom_equipe,'required'  => true))
                               ->add('valider', 'submit')
                               ->getForm();


        //validation formulaire d'envoi de l'invitation
        $formInvitation->handleRequest($request);
        if ($formInvitation->isValid()) {
            $invitation = new Invitation();
            //on fait correspondre le nom de l'équipe a son id  pour pouvoir insérer la ligne en base
            $tmp= $t->getRepository('WebMetaCommonBundle:Equipe')
                    ->findOneByNom($formInvitation->get('equipe')->getData());
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
                return $this->redirect($this->generateUrl('tournoi_gestion', array('id' => $id)));

            }
            else{
                $message = "une erreur est survenue";
            }

            #message de notification
            $this->get('session')->getFlashBag()->add('notice', $message);

        }


         return $this->render('WebMetaCommonBundle:Tournoi:gestion_tournoi.html.twig', array('liste_team' => $liste_team,'tournoi' => $tournoi, 'formInvitation' => $formInvitation->createView()));




    }
    public function suppressionAction($id){
        #récupération du tournoi courant
        $t = $this->getDoctrine()
                  ->getManager();
        $em = $this->getDoctrine()->getManager();
        $tournoi = $t->getRepository('WebMetaCommonBundle:Tournoi')
                     ->findOneById($id);

        #on supprime aussi les équipes du tournoi
        $liste_E= $t->getRepository('WebMetaCommonBundle:Invitation')
            ->findBy(array('idTournoi' => $id, 'statut' => 'accepted'));

        if($liste_E){
            for($i=0; $i <count($liste_E);$i++){

                $em->remove($liste_E[$i]);
                $em->flush();
            }
        }
        else{
            $message="erreur lors de la suppression des equipes du tournoi";
        }


        #on supprime les differentes rencontres du tournoi
        $liste_R=$em->getRepository('WebMetaCommonBundle:Rencontre')
                    ->findBy(array('idTournoi' => $id));

        if($liste_R){
            for($i=0; $i <count($liste_R);$i++){
                $em = $this->getDoctrine()->getManager();
                $em->remove($liste_R[$i]);
                $em->flush();
            }
        }
        else{
            $message="erreur lors de la suppression des rencontres";
        }

        #on supprime le tournoi
        $em = $this->getDoctrine()->getManager();
        $em->remove($tournoi);
        $em->flush();

        $message="tournoi supprimé";
        #message de notification
        $this->get('session')->getFlashBag()->add('notice', $message);

        return $this->redirect($this->generateUrl('tournoi_warbot'));
    }

    public function suppressionEquipeAction($idTournoi,$idTeam){

        #recuperation du tournoi
        $em = $this->getDoctrine()->getManager();
        $tournoi = $em->getRepository('WebMetaCommonBundle:Tournoi')->findOneById($idTournoi);

        #on récupère le lien de l'équipe au tournoi
        $team= $em->getRepository('WebMetaCommonBundle:Invitation')
                  ->findBy(array('idTournoi' => $idTournoi, 'idInvite' => $idTeam));

        for($i=0; $i <count($team);$i++){
            $em = $this->getDoctrine()->getManager();
            $em->remove($team[$i]);
            $em->flush();
        }

        #on rétablit le statut de l'équipe a "enAttente" jusqu'a ce qu'il y ait assez d'equipes
        if($tournoi->getStatut()=="pret"){
            $tournoi->setStatut("enAttente");
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournoi);
            $em->flush();
        }

        $message="supression de l'équipe effectué";
        #message de notification
        $this->get('session')->getFlashBag()->add('notice', $message);

        return $this->redirect($this->generateUrl('tournoi_gestion', array('id' => $idTournoi)));

    }

}
