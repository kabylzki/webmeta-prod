<?php

/* WebMetaCommonBundle:Page:creation.html.twig */
class __TwigTemplate_7d5586609dfc53b93099e8be48000f440b2edf29a09bdab926bc5a8c5c18c0c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'script_extend' => array($this, 'block_script_extend'),
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
    public function block_script_extend($context, array $blocks = array())
    {
        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " WebMeta - Formulaire de création d'une page ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-creation-compte\">
        <h1>Formulaire de création d'une page</h1>
        ";
        // line 13
        echo "        ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 14
        echo "
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/js/tinymce_config.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => $this->env->getExtension('routing')->getPath("page_creation_validation"), "method" => "POST"));
        echo "
    </div>
 ";
    }

    // line 21
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Page:creation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  64 => 16,  60 => 15,  57 => 14,  54 => 13,  47 => 9,  41 => 7,  34 => 4,  31 => 3,);
    }
}
