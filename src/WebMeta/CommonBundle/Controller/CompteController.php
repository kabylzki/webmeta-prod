<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Compte;
use WebMeta\CommonBundle\Form\CompteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CompteController extends Controller
{
    public function indexAction($id) {
        $session = $this->get('session');
        $compte = $session->get('compte');

        // Si la session n'est pas intialisée ou si mauvais compte
        if (empty($compte) || $compte->getId() != $id) {
            return $this->redirect($this->generateUrl('common_homepage'));
        }
        
        return $this->render('WebMetaCommonBundle:Compte:index_compte.html.twig', array ('compte' => $compte));
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
            // Récupère le fichier uploadé et génère un nom
            $file = $form['avatar']->getData();
            $ext = $form['avatar']->getData()->guessExtension();
            $filename = md5($file).".".$ext;
            // Bouge l'image dans web/avatar
            $form['avatar']->getData()->move("avatar/", $filename);
            // Set le nom du fichier en bdd
            $compte->setAvatar($filename);
            // Save
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
