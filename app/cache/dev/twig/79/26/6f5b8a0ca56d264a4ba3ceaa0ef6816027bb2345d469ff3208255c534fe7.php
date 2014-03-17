<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_79266f5b8a0ca56d264a4ba3ceaa0ef6816027bb2345d469ff3208255c534fe7 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  87 => 20,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  69 => 25,  66 => 15,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  33 => 5,  30 => 3,  204 => 72,  201 => 92,  180 => 50,  172 => 46,  165 => 66,  163 => 70,  160 => 49,  158 => 67,  154 => 44,  151 => 63,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  102 => 19,  92 => 21,  86 => 28,  79 => 18,  75 => 17,  72 => 16,  70 => 71,  67 => 70,  65 => 43,  62 => 23,  60 => 19,  57 => 14,  55 => 13,  48 => 9,  44 => 10,  40 => 8,  36 => 7,  32 => 12,  26 => 3,);
    }
}
