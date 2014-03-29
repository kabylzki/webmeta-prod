<?php

/* WebMetaCommonBundle:Metaciv:index_metaciv.html.twig */
class __TwigTemplate_6a987b312a317e42cd040c100e23b64e8289b34d905f0322ecde92be9907df45 extends Twig_Template
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
