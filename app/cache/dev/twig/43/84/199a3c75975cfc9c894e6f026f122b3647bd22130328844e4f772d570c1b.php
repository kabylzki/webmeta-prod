<?php

/* WebMetaCommonBundle:Warbot:index_warbot.html.twig */
class __TwigTemplate_4384199a3c75975cfc9c894e6f026f122b3647bd22130328844e4f772d570c1b extends Twig_Template
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
        echo " WebMeta - Warbot ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <section id=\"content\" class=\"col-md-10\">
        <div id=\"page-warbot-home\" class=\"col-md-10\">
            <h2>TODO : </h2>
            <ul>
                <li>- Page d'accueil Warbot</li>
                <li>- Vidéo de démo</li>
                <li>- Texte de présentation</li>
            </ul>
        </div>
    </section>    
 ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Warbot:index_warbot.html.twig";
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
