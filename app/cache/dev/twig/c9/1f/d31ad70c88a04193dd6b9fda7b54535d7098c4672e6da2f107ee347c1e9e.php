<?php

/* WebMetaCommonBundle:Warbot:form.html.twig */
class __TwigTemplate_c91fd31ad70c88a04193dd6b9fda7b54535d7098c4672e6da2f107ee347c1e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid\">

        <div class=\"container-fluid\">
            <div  class=\"row\">
                <div  class=\"col-md-1\">
                    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
                </div>

                <div  class=\"col-md-4\">
                    ";
        // line 13
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
        return "WebMetaCommonBundle:Warbot:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  38 => 9,  28 => 3,  43 => 9,  40 => 8,  37 => 7,  31 => 4,  26 => 2,);
    }
}
