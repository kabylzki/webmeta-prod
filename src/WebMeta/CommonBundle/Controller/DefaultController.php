<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('WebMetaCommonBundle:Default:index.html.twig');
    }

    public function documentationAction() {
        return $this->render('WebMetaCommonBundle:Default:documentation.html.twig');
    }

    public function tutorielsAction() {
        return $this->render('WebMetaCommonBundle:Default:tutoriels.html.twig');
    }

    public function faqAction() {
        return $this->render('WebMetaCommonBundle:Default:faq.html.twig');
    }

    public function contactAction() {
        return $this->render('WebMetaCommonBundle:Default:contact.html.twig');
    }

}
