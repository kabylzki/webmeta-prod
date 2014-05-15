<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use WebMeta\CommonBundle\Form\ResultatType;


class TypeTournoiController extends Controller
{
    public function coupeAction($id){


        $em = $this->getDoctrine()
                    ->getManager();

        //tableau des rencontres
        $liste_Rencontre=$em->getRepository('WebMetaCommonBundle:Rencontre')
                            ->findBy(array('idTournoi' => $id));

        //tableau des id des  equipes invités
        $liste_teamId= $em->getRepository('WebMetaCommonBundle:Invitation')
            ->findBy(array('idTournoi' => $id, 'statut' => 'accepted'));

        //tableau des noms des equipes
        $liste_team = array();
        for($i=0; $i <count($liste_teamId);$i++){
            $item=$em->getRepository('WebMetaCommonBundle:Equipe')->findOneById($liste_teamId[$i]->getIdInvite());
            array_push($liste_team,$item->getNom());
        }


        $form = $this->createFormBuilder()
            ->add('gagnant','choice', array('choices'   => $liste_team,'required'  => false,))
            ->add('perdant', 'choice', array('choices'   => $liste_team,'required'  => false,))
            ->add('valider','submit')
            ->getForm();
        if ($form->isValid()) {
        }


        return $this->render('WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig', array('form' => $form->createView(),"liste_Rencontre" =>$liste_Rencontre));
    }
}
