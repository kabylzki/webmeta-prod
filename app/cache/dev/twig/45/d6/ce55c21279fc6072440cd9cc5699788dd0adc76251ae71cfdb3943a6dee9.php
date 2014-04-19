<?php

/* WebMetaCommonBundle:Warbot:tournoi.html.twig */
class __TwigTemplate_45d6ce55c21279fc6072440cd9cc5699788dd0adc76251ae71cfdb3943a6dee9 extends Twig_Template
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

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <p>ceci est la page principale</p>
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Warbot:tournoi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  29 => 3,);
    }
}
