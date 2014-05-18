<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use WebMeta\CommonBundle\Entity\Rencontre;
use WebMeta\CommonBundle\Form\ResultatType;

class TypeTournoiController extends Controller {

    public function coupeAction($id, Request $request) {


        $em = $this->getDoctrine()
                ->getManager();

        #####################tableau des rencontres######################################
        $liste_tmp = $em->getRepository('WebMetaCommonBundle:Rencontre')
                ->findBy(array('idTournoi' => $id));

        $liste_RencontrePool = array(); #array indexé contenant les equipes par paire d'adversaire d'un match phase pool
        $liste_RencontreSemiFinal = array(); #phase de demi finale
        $liste_RencP = array(); #array contenant le nom des équipes par paire d'aversaire d'un match
        $liste_RencD = array(); #array contenant le nom des équipes par paire d'aversaire d'un match
        #boucle qui ajoute qui recupere les rencontres et les ajoute dans les  deux differents tableaux
        for ($i = 0; $i < count($liste_tmp); $i++) {
            $adv1 = $em->getRepository('WebMetaCommonBundle:Equipe')->findOneById($liste_tmp[$i]->getIdequipe1()); #adversaire numero 1
            $adv2 = $em->getRepository('WebMetaCommonBundle:Equipe')->findOneById($liste_tmp[$i]->getIdequipe2()); #adversaire numero 2

            if ($liste_tmp[$i]->getPhase() == "demiFinal") {
                array_push($liste_RencontreSemiFinal, array($adv1->getNom() => $adv1->getNom(), $adv2->getNom() => $adv2->getNom()));
                array_push($liste_RencD, array($adv1->getNom(), $adv2->getNom())); #indexée par des entiers dont le premier elt permet de distinguer les phases
            } elseif ($liste_tmp[$i]->getPhase() == "pool") {
                array_push($liste_RencontrePool, array($adv1->getNom() => $adv1->getNom(), $adv2->getNom() => $adv2->getNom())); #indéxée par la valeur des items (pour le besoin du formulaire
                array_push($liste_RencP, array($adv1->getNom(), $adv2->getNom())); #indexée par des entiers
            }
        }


        #formulaire pour renseigner les gagnants du premier tour
        $formPool = $this->createFormBuilder();
        for ($i = 0; $i < count($liste_RencontrePool); $i++) {
            $formPool->add('match-' . ($i + 1), 'choice', array('choices' => array($liste_RencontrePool[$i]), 'required' => true,));
        }
        $formPool = $formPool->add('valider', 'submit')
                ->getForm();

        $formPool->handleRequest($request);


        #validation du formulaire
        if ($formPool->isValid()) {
            $rencontre = new Rencontre();
            for ($i = 1; $i < count($liste_RencontrePool); $i = $i + 2) {
                $n1 = $formPool->get('match-' . $i)->getData();
                $n2 = $formPool->get('match-' . ($i + 1))->getData();
                $id1 = $em->getRepository('WebMetaCommonBundle:Equipe')->findOneByNom($n1 . "")->getId();
                $id2 = $em->getRepository('WebMetaCommonBundle:Equipe')->findOneByNom($n2 . "")->getId();

                $rencontre->setIdequipe1($id1)
                        ->setIdequipe2($id2)
                        ->setIdTournoi($id)
                        ->setDate(new \DateTime('today'))
                        ->setPhase("demiFinal");

                //persistance des données en base
                $em = $this->getDoctrine()->getManager();
                $em->persist($rencontre);
                $em->flush();
                $em->clear(); #pour pouvoir inserer des entités en base de donnée  dans une boucle
            }
            return $this->redirect($this->generateUrl('tournoi_coupe', array('id' => $id)));
        }

        #formulaire pour rensigner les gagnants des demifinals
        $formSemiFinal = $this->createFormBuilder();
        for ($i = 0; $i < count($liste_RencontreSemiFinal); $i++) {
            $formPool->add('match-' . ($i + 1), 'choice', array('choices' => array($liste_RencontreSemiFinal[$i]), 'required' => true,));
        }
        $formSemiFinal = $formSemiFinal->add('valider', 'submit')
                ->getForm();

        return $this->render('WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig', array('form' => $formPool->createView(), "liste_RencP" => $liste_RencP, "liste_RencD" => $liste_RencD));
    }

}
