<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use WebMeta\CommonBundle\Entity\Rencontre;
use WebMeta\CommonBundle\Entity\Resultat;
use WebMeta\CommonBundle\Form\ResultatType;


class TypeTournoiController extends Controller
{
    public function coupeAction($id,Request $request,$phase,$admin){

        //gagnant du tournoi
        $gagnant="";
        $em = $this->getDoctrine()
                    ->getManager();
        #recupération du gagnant du tournoi si il existe
        $resTournoi=$em->getRepository('WebMetaCommonBundle:Resultat')->findOneByIdTournoi($id);
        if($resTournoi){
            $gagnant=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneById($resTournoi->getIdGagnant())->getNom();
        }



        #####################tableau des rencontres######################################
        $liste_tmp=$em->getRepository('WebMetaCommonBundle:Rencontre')
                            ->findBy(array('idTournoi' => $id));

        $liste_RencontrePool=array();#array indexé contenant les equipes par paire d'adversaire d'un match phase pool
        $liste_RencontreSemiFinal=array();#array indexé contenant les equipes par paire d'adversaire d'un match phase de demi finale
        $liste_RencontreFinal=array();#array indexé contenant les equipes par paire d'adversaire d'un match en phase finale

        $liste_RencP=array();#array contenant le nom des équipes par paire d'aversaire d'un match
        $liste_RencD=array();#array contenant le nom des équipes par paire d'aversaire d'un match
        $liste_RencF=array();#array contenant le nom des équipes par paire d'aversaire d'un match


        #boucle qui ajoute qui recupere les rencontres et les ajoute dans les  deux differents tableaux
        for($i=0;$i<count($liste_tmp);$i++){
            $adv1=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneById($liste_tmp[$i]->getIdequipe1());#adversaire numero 1
            $adv2=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneById($liste_tmp[$i]->getIdequipe2());#adversaire numero 2

            if($liste_tmp[$i]->getPhase()=="demiFinal"){
                array_push($liste_RencontreSemiFinal,array($adv1->getNom()=> $adv1->getNom(), $adv2->getNom()=> $adv2->getNom()));
                array_push($liste_RencD,array($adv1->getNom(), $adv2->getNom()));#indexée par des entiers dont le premier elt permet de distinguer les phases
            }
            elseif($liste_tmp[$i]->getPhase()=="pool"){
                array_push($liste_RencontrePool,array($adv1->getNom()=> $adv1->getNom(), $adv2->getNom()=> $adv2->getNom()));#indéxée par la valeur des items (pour le besoin du formulaire
                array_push($liste_RencP,array($adv1->getNom(), $adv2->getNom()));#indexée par des entiers
            }
            elseif($liste_tmp[$i]->getPhase()=="final"){
                array_push($liste_RencontreFinal,array($adv1->getNom()=> $adv1->getNom(), $adv2->getNom()=> $adv2->getNom()));#indéxée par la valeur des items (pour le besoin du formulaire
                array_push($liste_RencF,array($adv1->getNom(), $adv2->getNom()));#indexée par des entiers
            }
        }

        #####################################phase de pool###############################################
        #formulaire pour renseigner les gagnants du premier tour
        $formPool = $this->createFormBuilder();
            for($i=0;$i<count($liste_RencontrePool);$i++){
                $formPool->add('match-'.($i+1),'choice', array('choices'   => array($liste_RencontrePool[$i]),'required'  => true,));
            }
        $formPool=$formPool->add('valider','submit')
                           ->getForm();

        $formPool->handleRequest($request);
        #validation du formulaire
        if($formPool->isValid()){
            $liste_RS=$em->getRepository('WebMetaCommonBundle:Rencontre')
                        ->findBy(array('idTournoi' => $id,'phase'=>"demiFinal"));
            $liste_RF=$em->getRepository('WebMetaCommonBundle:Rencontre')
                         ->findBy(array('idTournoi' => $id,'phase'=>"final"));

            for($i=0; $i <count($liste_RS);$i++){
                $em = $this->getDoctrine()->getManager();
                $em->remove($liste_RS[$i]);
                $em->flush();
            }
            for($i=0; $i <count($liste_RF);$i++){
                $em = $this->getDoctrine()->getManager();
                $em->remove($liste_RF[$i]);
                $em->flush();
            }
            $rencontre= new Rencontre();
            for($i=1;$i<count($liste_RencontrePool);$i=$i+2){
                $n1=$formPool->get('match-'.$i)->getData();
                $n2=$formPool->get('match-'.($i+1))->getData();
                $id1=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneByNom($n1."")->getId();
                $id2=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneByNom($n2."")->getId();

                $rencontre->setIdequipe1($id1)
                          ->setIdequipe2($id2)
                          ->setIdTournoi($id)
                          ->setDate(new \DateTime('today'))
                          ->setPhase("demiFinal");

                //persistance des données en base
                $em = $this->getDoctrine()->getManager();
                $em->persist($rencontre);
                $em->flush();
                $em->clear();#pour pouvoir inserer des entités en base de donnée  dans une boucle

            }
            return $this->redirect($this->generateUrl('tournoi_coupe', array('id' => $id,'phase' => 'demiFinal','admin' => $admin)));
        }

        ################################phase de demi-final##############################################

        #formulaire pour rensigner les gagnants des demifinals
        $formSemiFinal =$this->createFormBuilder();
            for($i=0;$i<count($liste_RencontreSemiFinal);$i++){
                $formSemiFinal->add('match-'.($i+1),'choice', array('choices'   => array($liste_RencontreSemiFinal[$i]),'required'  => true,));
            }
        $formSemiFinal=$formSemiFinal->add('valider','submit')
                                     ->getForm();

        $formSemiFinal->handleRequest($request);
        if($formSemiFinal->isValid()){
            $rencontre= new Rencontre();
            for($i=1;$i<count($liste_RencontreSemiFinal);$i=$i+2){
                $n1=$formSemiFinal->get('match-'.$i)->getData();
                $n2=$formSemiFinal->get('match-'.($i+1))->getData();
                $id1=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneByNom($n1."")->getId();
                $id2=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneByNom($n2."")->getId();

                $rencontre->setIdequipe1($id1)
                    ->setIdequipe2($id2)
                    ->setIdTournoi($id)
                    ->setDate(new \DateTime('today'))
                    ->setPhase("final");

                //persistance des données en base
                $em = $this->getDoctrine()->getManager();
                $em->persist($rencontre);
                $em->flush();
                $em->clear();#pour pouvoir inserer des entités en base de donnée  dans une boucle

            }
            return $this->redirect($this->generateUrl('tournoi_coupe', array('id' => $id,'phase' => 'final','admin'=>$admin)));
        }

        ############################phase final###################################################################
        #formulaire pour rensigner les gagnants des demifinals
        $formFinal =$this->createFormBuilder();
        for($i=0;$i<count($liste_RencontreFinal);$i++){
            $formFinal->add('gagnant','choice', array('choices'   => array($liste_RencontreFinal[$i]),'required'  => true,));
        }
        $formFinal=$formFinal->add('valider','submit')
                                     ->getForm();

        $formFinal->handleRequest($request);
        if($formFinal->isValid()){
            $tmp=$em->getRepository('WebMetaCommonBundle:Resultat')
                         ->findBy(array('idTournoi' => $id));

            for($i=0; $i <count($tmp);$i++){
                $em = $this->getDoctrine()->getManager();
                $em->remove($tmp[$i]);
                $em->flush();
            }

            $resultatTournoi= new Resultat();
             $n1=$formFinal->get('gagnant')->getData();

                $resultatTournoi->setIdGagnant($em->getRepository('WebMetaCommonBundle:Equipe')->findOneByNom($n1."")->getId())
                                ->setIdTournoi($id);
                //persistance des données en base
                $em = $this->getDoctrine()->getManager();
                $em->persist($resultatTournoi);
                $em->flush();


            return $this->redirect($this->generateUrl('tournoi_coupe', array('id' => $id,'phase' => 'fini','admin'=>$admin)));
        }



        $form=null;
        if($phase=="pool"){
            $form=$formPool;
        }
        else if($phase=="demiFinal"){
            $form=$formSemiFinal;
        }
        else if($phase=="final"){
            $form=$formFinal;
        }
        else if($phase=='fini'){
            $gId=$em->getRepository('WebMetaCommonBundle:Resultat')->findOneByIdTournoi($id)->getIdGagnant();
            $gagnant=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneById($gId)->getNom();
            $form=$formFinal;
        }


        return $this->render('WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig', array('admin'=> $admin ,'id' =>$id ,'phase'=> $phase,'form' => $form->createView(),"liste_RencP" =>$liste_RencP,"liste_RencD" =>$liste_RencD,"liste_RencF" =>$liste_RencF,"gagnant"=>$gagnant));
    }
}
