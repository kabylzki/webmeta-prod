<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller {

    // Affiche le formulaire de connexion
    public function formLoginAction() {
        $data = array();
        $form = $this->createFormBuilder($data)
                ->add('login', 'text', array(
                        'attr' => array(
                        'placeholder' => 'Login',
                )))

                ->add('password', 'password', array(
                        'attr' => array(
                        'placeholder' => 'Mdp',
                )))
                ->add('Connexion', 'submit')
                ->getForm();

        return $this->render('WebMetaCommonBundle:Compte:login.html.twig', array('form' => $form->createView()));
    }

    // Test le formulaire de connexion
    public function loginAction(Request $request) {

        $session = $this->get('session');

        $data = array();
        $form = $this->createFormBuilder($data)
                ->add('login', 'text')
                ->add('password', 'password')
                ->add('Connexion', 'submit')
                ->getForm();

        if ($request->isMethod('POST')) {
            $form->bind($request);
            $data = $form->getData();

            $compte = $this->getDoctrine()->getRepository('WebMetaCommonBundle:Compte')->findOneBy(array('login' => $data['login'], 'password' => md5($data['password'])));
            if (!$compte) {

                // Message de confirmation pour l'utilisateur
                $session->getFlashBag()->add(
                        'error', "Le compte n'existe pas"
                );

                $session->set('is_connected', false);
                $session->set('compte', null);
                
                return $this->redirect($this->generateUrl('common_homepage'));
            } else {
                $session->set('is_connected', true);
                $session->set('compte', $compte);
                
                return $this->redirect($this->generateUrl('compte_view', array("id" => $compte->getId())));
            }
        }
        
    }
    
   // Test le formulaire de connexion
    public function logoutAction() {

        $session = $this->get('session');
        $session->set('is_connected', false);
        unset($_SESSION['compte']);
        
        return $this->redirect($this->generateUrl('common_homepage'));
        
    }  
    

}
