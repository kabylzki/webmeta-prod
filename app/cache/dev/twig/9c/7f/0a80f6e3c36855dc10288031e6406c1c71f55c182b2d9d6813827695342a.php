<?php

/* WebMetaCommonBundle:Default:contact.html.twig */
class __TwigTemplate_9c7f0a80f6e3c36855dc10288031e6406c1c71f55c182b2d9d6813827695342a extends Twig_Template
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
    <div id=\"page-contact-form\">
        <h2>TODO : </h2>
        <ul>
            <li>- Formulaire de contact</li>
            <li>- Envoi d'email</li>
        </ul>

    </div>
 ";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  36 => 5,  30 => 3,);
    }
}
