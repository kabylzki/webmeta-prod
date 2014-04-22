<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebMeta\CommonBundle\Entity\Compte;
use WebMeta\CommonBundle\Form\CompteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CompteController extends Controller {

    public function indexAction($id) {
        $session = $this->get('session');
        $compte = $session->get('compte');
        // gestion utilisateur connecté
        $user_connected = true;

        // Si la session n'est pas intialisée (utilisateur non connecté)
        if (empty($compte)) {
            return $this->redirect($this->generateUrl('common_homepage'));
        }

        // Si l'id est différent de l'id de l'utilisateur connecté
        if ($id != $compte->getId()) {
            $compte = $this->getDoctrine()->getRepository('WebMetaCommonBundle:Compte')->find($id);
            $user_connected = false;
            if (empty($compte)) {
                return $this->redirect($this->generateUrl('common_homepage'));
            }
        }

        return $this->render('WebMetaCommonBundle:Compte:index_compte.html.twig', array('compte' => $compte, 'user_connected' => $user_connected));
    }

    public function formCreationAction() {
        $compte = new Compte();
        $form = $this->createForm(new CompteType(), $compte);

        return $this->render('WebMetaCommonBundle:Compte:creation.html.twig', array('form' => $form->createView()));
    }

    public function creationAction(Request $request) {
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
                'notice', $message
        );

        return $this->redirect($this->generateUrl('compte_creation'));
    }

    // Formulaire de modification d'un compte
    public function formModificationAction() {
        $session = $this->get('session');
        $compte_session = $session->get('compte');


        $compte = $this->getDoctrine()->getManager()->getRepository('WebMetaCommonBundle:Compte')->find($compte_session->getId());

        $form = $this->createForm(new CompteType(), $compte);

        $form->add('password', "hidden", array('disabled' => true, "label" => "Password", 'data' => "*****"));
        $form->add('email', "email", array('read_only' => true, "label" => "Email"));

        return $this->render('WebMetaCommonBundle:Compte:modification.html.twig', array('form' => $form->createView()));
    }

    // Modification du compte
    public function modificationAction(Request $request) {
        $form = $this->createForm(new CompteType());
        $form->handleRequest($request);

        $session = $this->get('session');
        $compte_session = $session->get('compte');

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $compte_update = $em->getRepository('WebMetaCommonBundle:Compte')->find($compte_session->getId());

            // Save
            $compte_update->setPseudo($form["pseudo"]->getData());
            $compte_update->setPassword($compte_update->getPassword());
            $compte_update->setEmail($form["email"]->getData());
            $compte_update->setNom($form["nom"]->getData());
            $compte_update->setPrenom($form["prenom"]->getData());
            $compte_update->setDateNaissance($form["date_naissance"]->getData());
            $compte_update->setDescription($form["description"]->getData());
            $em->flush();

            $message = "Compte Modifié avec succès";
        } else {
            $message = "Erreur lors de la modification";
        }

        // Message de confirmation pour l'utilisateur
        $this->get('session')->getFlashBag()->add(
                'notice', $message
        );

        // Met à jour la session
        $session->set('compte', $compte_update);

        return $this->redirect($this->generateUrl('compte_view', array("id" => $compte_session->getId())));
    }

    // Formulaire de modification de l'avatar
    public function formModificationAvatarAction() {
        $form = $this->createFormBuilder()
                ->add('avatar', 'file')
                ->add('Valider', 'submit')
                ->getForm();

        return $this->render('WebMetaCommonBundle:Compte:modification_avatar.html.twig', array('form' => $form->createView()));
    }

    // Modification de l'avatar
    public function modificationAvatarAction(Request $request) {
        $session = $this->get('session');
        $compte_session = $session->get('compte');

        return $this->redirect($this->generateUrl('compte_view', array("id" => $compte_session->getId())));
    }

}
