<?php

/* WebMetaCommonBundle:Tournoi:creation.html.twig */
class __TwigTemplate_ec61f2ca3e81270349b4807781fb0954af6c45f3dc3dcdce19114d5fbe6e1921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet_extend' => array($this, 'block_stylesheet_extend'),
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
        // line 7
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "WebMetaCommonBundle:Tournoi:form.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet_extend($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/warbot.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Formulaire de création d'un Tournoi ";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  <h1>formulaire de création de Tournoi</h1>
    ";
        // line 15
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 16
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
        return array (  57 => 16,  54 => 15,  51 => 13,  48 => 12,  42 => 10,  35 => 4,  32 => 3,  27 => 7,);
    }
}
