<?php

/* WebMetaCommonBundle:Ressource:index_ressource.html.twig */
class __TwigTemplate_73503584bcf8395efb92e390c4f3188b3f93ae82f4af7feef4eee88fdedf8bfc extends Twig_Template
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
        echo " WebMeta - Ressources ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-ressource-index\">
        <h1>Ressources</h1>

        ";
        // line 10
        echo "        ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "
        
        
        <div class=\"presentation-equipe col-md-12\">
            <h3>Warbot</h3>
            <ul>
                <li></li>
            </ul>
        </div>
        
        
        <div class=\"presentation-equipe col-md-12\">
            <h3>Metaciv</h3>
            <ul>
                <li></li>
            </ul>
        </div>
        
    </div>
";
    }

    // line 32
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
    <h1>Menu</h1>

";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Ressource:index_ressource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  47 => 11,  44 => 10,  36 => 5,  30 => 3,);
    }
}
