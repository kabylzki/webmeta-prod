<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class TypeTournoiController extends Controller
{
    public function coupeAction($id){


        $em = $this->getDoctrine()
                    ->getManager();

        //tableau des rencontres
        $liste_Rencontre=$em->getRepository('WebMetaCommonBundle:Rencontre')
                            ->findBy(array('idTournoi' => $id));





        $genererMatchForm = $this->createFormBuilder()
            ->add('generer', 'submit')
            ->getForm();
        if ($genererMatchForm->isValid()) {
        }


        return $this->render('WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig', array('genererMatchForm' => $genererMatchForm->createView(),"liste_Rencontre" =>$liste_Rencontre));
    }
}
