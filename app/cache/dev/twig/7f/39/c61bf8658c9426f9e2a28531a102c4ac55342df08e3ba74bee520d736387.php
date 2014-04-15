<?php

/* WebMetaCommonBundle:Compte:login.html.twig */
class __TwigTemplate_7f39c61bf8658c9426f9e2a28531a102c4ac55342df08e3ba74bee520d736387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => $this->env->getExtension('routing')->getPath("login"), "method" => "POST"));
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Compte:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
