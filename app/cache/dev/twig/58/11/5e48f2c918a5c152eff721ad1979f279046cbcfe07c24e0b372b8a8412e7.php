<?php

/* WebMetaCommonBundle:Compte:modification.html.twig */
class __TwigTemplate_58115e48f2c918a5c152eff721ad1979f279046cbcfe07c24e0b372b8a8412e7 extends Twig_Template
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
        echo " WebMeta - Formulaire de modification d'un compte ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div id=\"page-modification-compte\">
    <h1>Formulaire de modification d'un compte</h1>
    ";
        // line 9
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => $this->env->getExtension('routing')->getPath("compte_modification_validation"), "method" => "POST"));
        echo "
</div> 
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Compte:modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  45 => 10,  42 => 9,  35 => 5,  29 => 3,);
    }
}
