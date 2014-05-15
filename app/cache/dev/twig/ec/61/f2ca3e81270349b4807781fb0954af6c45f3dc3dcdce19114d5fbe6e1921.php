<?php

/* WebMetaCommonBundle:Tournoi:creation.html.twig */
class __TwigTemplate_ec61f2ca3e81270349b4807781fb0954af6c45f3dc3dcdce19114d5fbe6e1921 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "WebMetaCommonBundle:Tournoi:form.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Formulaire de création d'un Tournoi ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <h1>formulaire de création de Tournoi</h1>
    ";
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => $this->env->getExtension('routing')->getPath("tournoi_creation_validation"), "method" => "POST"));
        echo "


";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Tournoi:creation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,  40 => 8,  37 => 7,  31 => 5,  26 => 2,);
    }
}
