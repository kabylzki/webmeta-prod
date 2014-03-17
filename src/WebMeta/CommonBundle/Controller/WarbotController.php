<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WarbotController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebMetaCommonBundle:Warbot:index_warbot.html.twig');
    }
}
