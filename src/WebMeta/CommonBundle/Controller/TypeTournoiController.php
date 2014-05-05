<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TypeTournoiController extends Controller
{
    public function coupeAction(){
        return $this->render('WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig');
    }
}
