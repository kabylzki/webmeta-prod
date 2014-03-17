<?php

/* WebMetaCommonBundle:Default:faq.html.twig */
class __TwigTemplate_ef4f216a5706791467f23d4b367f6ab70a66a7ca4a5a911d0fd0037caa254242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebMetaCommonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Metaciv ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <section id=\"content\" class=\"col-md-12\">
        <div id=\"page-faq\" class=\"col-md-10\">
            <h2>TODO : </h2>
            <ul>
                <li>- Demander liste des questions fréquemment posées</li>
                <li>- les intégrer en BDD les affichées</li>
                <li>- IUD FAQ</li>
            </ul>
        </div>
    </section>    
 ";
    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Default:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  36 => 5,  30 => 3,);
    }
}
