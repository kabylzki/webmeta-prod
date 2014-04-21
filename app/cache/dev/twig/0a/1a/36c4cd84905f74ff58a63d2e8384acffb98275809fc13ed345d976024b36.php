<?php

/* WebMetaCommonBundle:Compte:modification_avatar.html.twig */
class __TwigTemplate_0a1a36c4cd84905f74ff58a63d2e8384acffb98275809fc13ed345d976024b36 extends Twig_Template
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
<div id=\"page-compte-index\">
    ";
        // line 8
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 9
        echo "    
    <h1>Modification de l'avatar</h1>

    ";
        // line 13
        echo "    ";
        echo twig_include($this->env, $context, "WebMetaCommonBundle:Compte:form_avatar.html.twig");
        echo "

    
<p><a href=\"#\" onclick=\"window.history.back();\" title=\"\">Retour</a></p>
    
</div>    
 ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Compte:modification_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  44 => 9,  41 => 8,  35 => 5,  29 => 3,);
    }
}
