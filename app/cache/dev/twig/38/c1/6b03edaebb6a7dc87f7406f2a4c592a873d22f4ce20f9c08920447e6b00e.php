<?php

/* WebMetaCommonBundle:Ressource:upload.html.twig */
class __TwigTemplate_38c16b03edaebb6a7dc87f7406f2a4c592a873d22f4ce20f9c08920447e6b00e extends Twig_Template
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
        echo " WebMeta - Envoyer une ressource ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"page-ressource-upload\">
        <h1>Envoyer une ressource</h1>

        ";
        // line 10
        echo "        ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 11
        echo "        
        <form action=\"#\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <input type=\"submit\" value=\"Envoyer\" />
        </form>
        
    </div>
";
    }

    // line 21
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
    <h1>Menu</h1>

";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Ressource:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  54 => 13,  50 => 12,  47 => 11,  44 => 10,  36 => 5,  30 => 3,);
    }
}
