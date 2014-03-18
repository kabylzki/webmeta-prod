<?php

/* WebMetaCommonBundle:Metaciv:index_metaciv.html.twig */
class __TwigTemplate_98b4c6a205ca372a6a049f70ada1c97f51667c53b3458b0e8ac3898c1efb3ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    <section id=\"content\" class=\"col-md-10\">
        <div id=\"page-metaciv-home\" class=\"col-md-10\">
            <h2>TODO : </h2>
            <ul>
                <li>- Page d'accueil Metaciv</li>
                <li>- Vidéo de démo</li>
                <li>- Texte de présentation</li>
            </ul>
        </div>
    </section>    
 ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Metaciv:index_metaciv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,);
    }
}
