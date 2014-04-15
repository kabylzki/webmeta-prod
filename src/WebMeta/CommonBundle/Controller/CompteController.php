<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Compte;
use WebMeta\CommonBundle\Form\CompteType;
use Symfony\Component\HttpFoundation\Request;

class CompteController extends Controller
{
    public function indexAction() {
        return $this->render('WebMetaCommonBundle:Compte:index_compte.html.twig');
    }
    
    public function creationAction() {
        $compte = new Compte();
        $form = $this->createForm(new CompteType(), $compte);
       
        return $this->render('WebMetaCommonBundle:Compte:creation.html.twig', array('form'=>$form->createView()));
    }
    
    public function validationAction(Request $request) {
        $compte = new Compte();

        $form = $this->createForm(new CompteType(), $compte);

        $form->handleRequest($request);

        // Récupère et Set la date courante dans "DateInscription"
        $compte->setDateInscription(new \DateTime());
        
        // Encrypte le MDP en MD5
        $compte->setPassword(md5($form['password']->getData()));
        
        // Si le formulaire est valide alors on insert
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compte);
            $em->flush();
            
            $message = "Votre compte a été crée avec succès";
        } else {
            $message = "Une erreur est survenue, création impossible";
        }
           
        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
            'notice',
            $message
        );
        
        return $this->redirect($this->generateUrl('compte_creation'));
    }
    
    
    
}
