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
        return array (  35 => 6,  26 => 3,  23 => 2,  19 => 1,  346 => 127,  341 => 126,  338 => 125,  290 => 78,  287 => 77,  281 => 69,  275 => 65,  267 => 70,  265 => 69,  261 => 67,  258 => 66,  256 => 65,  250 => 62,  247 => 61,  239 => 54,  233 => 51,  227 => 50,  224 => 49,  218 => 46,  215 => 45,  212 => 44,  209 => 43,  198 => 38,  190 => 37,  182 => 36,  174 => 35,  166 => 34,  158 => 33,  150 => 29,  140 => 22,  134 => 17,  129 => 16,  124 => 14,  118 => 11,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 5,  88 => 129,  86 => 125,  83 => 124,  80 => 123,  78 => 77,  75 => 76,  72 => 75,  66 => 59,  60 => 27,  57 => 22,  50 => 17,  40 => 14,  38 => 7,  99 => 35,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 61,  63 => 29,  54 => 13,  48 => 10,  45 => 9,  42 => 8,  36 => 5,  30 => 1,);
    }
}
