<?php

/* WebMetaCommonBundle:Default:message.html.twig */
class __TwigTemplate_6655df5318e86af4604c70dff2c735b3b6282e8ac1fecf45ec4e0cc94ca2f758 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"flash-notice\">
        ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "    <div class=\"flash-error\">
        ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  26 => 3,  23 => 2,  88 => 28,  58 => 17,  32 => 6,  28 => 5,  24 => 4,  19 => 1,  228 => 59,  223 => 58,  220 => 57,  213 => 53,  211 => 52,  208 => 51,  202 => 44,  196 => 40,  189 => 45,  187 => 44,  183 => 42,  180 => 41,  178 => 40,  172 => 37,  169 => 36,  162 => 32,  157 => 30,  150 => 26,  145 => 24,  139 => 19,  134 => 17,  129 => 15,  122 => 11,  118 => 10,  114 => 9,  110 => 8,  106 => 7,  102 => 6,  97 => 5,  92 => 61,  90 => 57,  87 => 56,  84 => 55,  79 => 50,  76 => 24,  73 => 23,  70 => 34,  67 => 20,  64 => 19,  61 => 18,  54 => 19,  50 => 18,  45 => 9,  40 => 8,  38 => 7,  36 => 7,  30 => 1,  82 => 25,  78 => 33,  72 => 29,  57 => 16,  53 => 13,  47 => 11,  44 => 9,  41 => 8,  35 => 6,  29 => 3,);
    }
}
