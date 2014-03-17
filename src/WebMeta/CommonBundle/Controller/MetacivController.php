<?php

namespace WebMeta\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MetacivController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebMetaCommonBundle:Metaciv:index_metaciv.html.twig');
    }
}
