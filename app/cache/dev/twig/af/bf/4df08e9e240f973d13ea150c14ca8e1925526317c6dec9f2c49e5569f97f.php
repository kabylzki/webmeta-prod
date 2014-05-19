<?php

/* WebMetaCommonBundle:Page:modification.html.twig */
class __TwigTemplate_afbf4df08e9e240f973d13ea150c14ca8e1925526317c6dec9f2c49e5569f97f extends Twig_Template
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
        echo " WebMeta - Formulaire de modification d'une page ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div id=\"page-modification-compte\">
    <h1>Formulaire de modification d'une page</h1>
    ";
        // line 9
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => $this->env->getExtension('routing')->getPath("page_modification_validation", array("id" => (isset($context["id_page"]) ? $context["id_page"] : $this->getContext($context, "id_page")))), "method" => "POST"));
        echo "
</div> 
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Page:modification.html.twig";
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
