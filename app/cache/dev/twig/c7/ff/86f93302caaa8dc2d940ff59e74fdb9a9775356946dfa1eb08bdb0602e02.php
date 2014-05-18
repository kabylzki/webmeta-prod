<?php

/* WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig */
class __TwigTemplate_c7ff86f93302caaa8dc2d940ff59e74fdb9a9775356946dfa1eb08bdb0602e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebMetaCommonBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_Rencontre"]) ? $context["liste_Rencontre"] : $this->getContext($context, "liste_Rencontre")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["renc"]) {
            // line 6
            echo "        <div class=\"row\">
            <div class=\"row\">
                <div class=\"col-md-2 struct\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renc"]) ? $context["renc"] : $this->getContext($context, "renc")), "getIdEquipe1", array(), "method"), "html", null, true);
            echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 struct\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renc"]) ? $context["renc"] : $this->getContext($context, "renc")), "getIdEquipe2", array(), "method"), "html", null, true);
            echo "</div>
            </div>
        </div>
        ";
            // line 14
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != twig_length_filter($this->env, (isset($context["liste_Rencontre"]) ? $context["liste_Rencontre"] : $this->getContext($context, "liste_Rencontre")))) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != (twig_length_filter($this->env, (isset($context["liste_Rencontre"]) ? $context["liste_Rencontre"] : $this->getContext($context, "liste_Rencontre"))) / 2)))) {
                // line 15
                echo "
            <div class=\"row\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-md-offset-3 struct\">demi finale</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-2 col-md-offset-3 struct\">demi finale</div>
                </div>
            </div>
        ";
            }
            // line 25
            echo "
        ";
            // line 26
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == (twig_length_filter($this->env, (isset($context["liste_Rencontre"]) ? $context["liste_Rencontre"] : $this->getContext($context, "liste_Rencontre"))) / 2))) {
                // line 27
                echo "            <div class=\"row\">
                <div class=\"col-md-2 col-md-offset-6 struct\">finale</div>
            </div>
        ";
            }
            // line 31
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['renc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    ";
        // line 35
        echo "    ";
        $this->env->loadTemplate("WebMetaCommonBundle:Default:message.html.twig")->display($context);
        // line 36
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebMetaCommonBundle:Tournoi/typeTournoi:championnat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  108 => 35,  105 => 33,  90 => 31,  84 => 27,  82 => 26,  79 => 25,  67 => 15,  65 => 14,  59 => 11,  53 => 8,  49 => 6,  31 => 5,  28 => 4,);
    }
}
