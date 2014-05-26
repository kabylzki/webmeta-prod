<?php

/* WebMetaCommonBundle:Tournoi:form.html.twig */
class __TwigTemplate_1ad50ef44eab91540c2e0bcc43670acd98b3438091faeacbd314fc115310afc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheet_extend' => array($this, 'block_stylesheet_extend'),
            'form_row' => array($this, 'block_form_row'),
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
    public function block_stylesheet_extend($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webmetacommon/css/warbot.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_form_row($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container-fluid\">

        <div class=\"container-fluid\">
            <div  class=\"row\">
                <div  class=\"col-md-1\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
                </div>

                <div  class=\"col-md-4\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                </div>
                <br/>
                <br/>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Tournoi:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  49 => 13,  39 => 7,  29 => 3,  57 => 16,  54 => 15,  51 => 13,  48 => 12,  42 => 8,  35 => 4,  32 => 4,  27 => 7,);
    }
}
