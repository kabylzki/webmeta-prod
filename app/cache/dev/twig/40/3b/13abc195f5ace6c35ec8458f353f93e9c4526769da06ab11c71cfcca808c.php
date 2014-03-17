<?php

/* WebMetaCommonBundle:Default:documentation.html.twig */
class __TwigTemplate_403b13abc195f5ace6c35ec8458f353f93e9c4526769da06ab11c71cfcca808c extends Twig_Template
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
        <div id=\"page-documentation\" class=\"col-md-10\">
            <h2>TODO : </h2>
            <ul>
                <li>- Affichage de la doc tirée de la BDD</li>
                <li>- IUD Documentation</li>
            </ul>
        </div>
    </section>    
 ";
    }

    // line 18
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Default:documentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  36 => 5,  30 => 3,);
    }
}
